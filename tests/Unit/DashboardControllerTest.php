
use App\Models\Course;
use App\Models\Report;
use App\Models\ReportQuick;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testShow()
    {
        // Case: Authenticated user with subscription_id = 4
        $user = User::create([
            'subscription_id' => 4,
            // Add other required attributes for the user
        ]);
        $this->actingAs($user);

        // Create dummy reports and report quicks
        $reports = Report::factory()->count(3)->create();
        $reportsQuick = ReportQuick::factory()->count(2)->create();

        $response = $this->get('/dashboard');

        $response->assertViewIs('admin.dashboard');
        $response->assertViewHas('reports', $reports);
        $response->assertViewHas('reportsQuick', $reportsQuick);
        $response->assertStatus(200);
    }

    public function testShowUnauthorizedAccess()
    {
        // Case: Authenticated user with subscription_id other than 4
        $user = User::create([
            'subscription_id' => 3,
            // Add other required attributes for the user
        ]);
        $this->actingAs($user);

        $response = $this->get('/dashboard');

        $response->assertRedirect('/');
        $response->assertSessionHas('status', 'Unauthorized access');
        $response->assertStatus(302);
    }

    public function testShowReport()
    {
        // Case: Authenticated user with subscription_id = 4
        $user = User::create([
            'subscription_id' => 4,
            // Add other required attributes for the user
        ]);
        $this->actingAs($user);

        $report = Report::create([
            // Add required attributes for the report
        ]);

        $response = $this->get('/report/' . $report->id);

        $response->assertViewIs('admin.report');
        $response->assertViewHas('report', $report);
        $response->assertStatus(200);
    }

    public function testShowReportUnauthorizedAccess()
    {
        // Case: Authenticated user with subscription_id other than 4
        $user = User::create([
            'subscription_id' => 3,
            // Add other required attributes for the user
        ]);
        $this->actingAs($user);

        $report = Report::create([
            // Add required attributes for the report
        ]);

        $response = $this->get('/report/' . $report->id);

        $response->assertRedirect('/');
        $response->assertSessionHas('status', 'Unauthorized access');
        $response->assertStatus(302);
    }

    public function testSend()
    {
        // Case: Authenticated user
        $user = User::create([
            // Add required attributes for the user
        ]);
        $this->actingAs($user);

        $course = Course::create([
            // Add required attributes for the course
        ]);

        $response = $this->post('/send/' . $course->id);

        $response->assertRedirect('/');
        $response->assertSessionHas('status', 'Course has been reported');
        $response->assertStatus(302);
    }
}
