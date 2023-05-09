
use App\Models\Course;
use App\Models\Report;
use App\Models\ReportQuick;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class DashboardControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testShow()
    {
        // Case: Authenticated user with subscription_id = 4
        $user = User::create([
            'subscription_id' => 4,
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'username' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '12345678',
            'address' => fake()->address(),
            'city' => fake()->city(),
            'country' => fake()->countryCode(),
            'zip_code' => fake()->postcode(),
            'description' => fake()->paragraph(),
            'remember_token' => Str::random(10),
            'profile_picture_path' => 'profiles/defaultProfilePicture.svg',
            // Add other required attributes for the user
        ]);

        Auth::login($user); // Manually log in the user

        // Create dummy reports and report quicks
        $reports = [];
        for ($i = 0; $i < 3; $i++) {
            $reports[] = Report::create([
                'title' => 'Report ' . ($i + 1),
                'name' => 'Name' . ($i + 1),
                'description' => 'Description ' . ($i + 1),
                'email' => fake()->unique()->safeEmail(),
                'reason' => fake()->name(),
            ]);
        }

        $reportsQuick = [];
        for ($i = 0; $i < 2; $i++) {
            $reportsQuick[] = ReportQuick::create([
                'title' => 'Report Quick ' . ($i + 1),
                'name' => 'Quick Name' . ($i + 1),
                'description' => 'Quick Description ' . ($i + 1),
            ]);
        }

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
