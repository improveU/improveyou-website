<?php

use App\Models\Course;
use App\Models\Report;
use App\Models\ReportQuick;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Database\Factories\ReportFactory;


class DashboardControllerTest extends TestCase
{
    use RefreshDatabase;
    public function testShow()
    {
        $this->withoutExceptionHandling();
    
        $user = User::factory()->create();
        $user->subscription_id = 4;
        $user->save();
    
        Report::factory()->create(); // Create a sample report
    
        $response = $this->actingAs($user)->get('/dashboard');
    
        $response->assertViewIs('admin.dashboard');
        $response->assertViewHas('reports');
        $response->assertViewHas('reportsQuick');
    
        $response->assertSee('Dashboard');
    }
    
    public function testShowAuthorizedUser()
{
    $user = User::factory()->create();
    $user->subscription_id = 4;
    $user->save();

    $reports = Report::factory()->count(3)->create();
    $reportsQuick = ReportQuick::factory()->count(2)->create();

    $response = $this->actingAs($user)->get('/dashboard');

    $response->assertStatus(200);
    $response->assertViewHas('reports', $reports);
    $response->assertViewHas('reportsQuick', $reportsQuick);
}
public function testShowUnauthorizedUser()
{
    $user = User::factory()->create();
    $user->subscription_id = 3; // Non-matching subscription ID
    $user->save();

    $response = $this->actingAs($user)->get('/dashboard');

    $response->assertRedirect('/home');
    $response->assertSessionHas('status', 'Unauthorized access');
}
public function testShowReportAuthorizedUser()
{
    $user = User::factory()->create();
    $user->subscription_id = 4;
    $user->save();

    $report = Report::factory()->create();

    $response = $this->actingAs($user)->get('/report/' . $report->id);

    $response->assertStatus(200);
    $response->assertViewHas('report', $report);
}
public function testShowReportUnauthorizedUser()
{
    $user = User::factory()->create();
    $user->subscription_id = 3; // Non-matching subscription ID
    $user->save();

    $report = Report::factory()->create();

    $response = $this->actingAs($user)->get('/report/' . $report->id);

    $response->assertRedirect('/home');
    $response->assertSessionHas('status', 'Unauthorized access');
}
public function testSend()
{
    $user = User::factory()->create();
    $courseId = 123; // Replace with an actual course ID

    $response = $this->actingAs($user)->post('/send/' . $courseId);

    $response->assertRedirect();
    $response->assertSessionHas('status', 'Course has been reported');

    // Additional assertions to check if the report was created in the database
    $this->assertDatabaseHas('report_quicks', [
        'course_id' => $courseId,
        'reporter_id' => $user->id,
    ]);
}

    
}
