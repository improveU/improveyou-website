<?php

use App\Models\Report;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;



class DashboardControllerTest extends TestCase
{
    use RefreshDatabase;
    public function testShow()
    {
        $this->withoutExceptionHandling();
    
        $user = User::factory()->create(['subscription_id' => 4]);
    
        Report::factory()->create(); // Create a sample report
    
        $response = $this->actingAs($user)->get('/dashboard');
    
        $response->assertViewIs('admin.dashboard');
        $response->assertViewHas('reports');
        $response->assertViewHas('reportsQuick');
    
        $response->assertSee('Dashboard');
    }
    
public function testShowUnauthorizedUser()
{
    $user = User::factory()->create(['subscription_id' => 3]);


    $response = $this->actingAs($user)->get('/dashboard');

    $response->assertRedirect('/');
    $response->assertSessionHas('status', 'Unauthorized access');
}
public function testShowReportAuthorizedUser()
{
    $user = User::factory()->create(['subscription_id' => 4]);

    $report = Report::factory()->create();

    $response = $this->actingAs($user)->get('/report/' . $report->id);

    $response->assertStatus(200);
    $response->assertViewHas('report', $report);
}
public function testShowReportUnauthorizedUser()
{
    $user = User::factory()->create(['subscription_id' => 3]);

    $report = Report::factory()->create();

    $response = $this->actingAs($user)->get('/report/' . $report->id);

    $response->assertRedirect('/');
    $response->assertSessionHas('status', 'Unauthorized access');
}
    
}
