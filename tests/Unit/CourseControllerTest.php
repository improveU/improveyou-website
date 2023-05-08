
use App\Http\Controllers\CourseController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testRoot()
{
    // Case: Authenticated user with a non-zero subscription ID
    $user = User::factory()->create(['subscription_id' => 1]);
    $this->actingAs($user);
    
    $response = $this->get('/');

    $response->assertRedirect('/courses');
    $response->assertStatus(302);

    // Case: Authenticated user with a zero subscription ID
    $user = User::factory()->create(['subscription_id' => 0]);
    $this->actingAs($user);
    
    $response = $this->get('/');

    $response->assertViewIs('index');
    $response->assertStatus(200);

    // Case: Guest user
    Auth::logout();
    
    $response = $this->get('/');

    $response->assertViewIs('index');
    $response->assertStatus(200);
}


    public function testShowCourse()
    {
        // Case: Authenticated user with a non-zero subscription ID
        $user = User::factory()->create(['subscription_id' => 1]);
        $this->actingAs($user);
        
        $course = Course::factory()->create();

        $response = $this->get('/course/' . $course->id);

        $response->assertViewIs('user.courseDetail');
        $response->assertViewHas('course', $course);
        $response->assertStatus(200);

        // Case: Authenticated user with a zero subscription ID
        $user = User::factory()->create(['subscription_id' => 0]);
        $this->actingAs($user);
        
        $course = Course::factory()->create();

        $response = $this->get('/course/' . $course->id);

        $response->assertRedirect('/');
        $response->assertStatus(302);

        // Case: Guest user
        Auth::logout();
        
        $course = Course::factory()->create();

        $response = $this->get('/course/' . $course->id);

        $response->assertRedirect('/');
        $response->assertStatus(302);
    }

    public function testListAllCourses()
    {
        $courses = Course::factory()->count(4)->create();

        $response = $this->get('/courses');

        $response->assertViewIs('user.courses');
        $response->assertViewHas('courses', $courses);
        $response->assertStatus(200);
    }

    public function testListSpecificCourses()
    {
        // Case: Category is 'all'
        $courses = Course::factory()->count(12)->create();

        $response = $this->get('/courses/all');

        $response->assertViewIs('user.coursesSpecific');
        $response->assertViewHas('courses', $courses);
        $response->assertViewHas('category', 'All');
        $response->assertStatus(200);

        // Case: Category is 'popular'
        $courses = Course::factory()->count(12)->create();
        $popularCourses = Course::orderBy('views', 'desc')->get();

        $response = $this->get('/courses/popular');

        $response->assertViewIs('user.coursesSpecific');
        $response->assertViewHas('courses', $popularCourses);
        $response->assertViewHas('category', 'Popular');
        $response->assertStatus(200);

    // Case: Category is 'latest'
    $courses = Course::factory()->count(12)->create();
    $latestCourses = Course::latest()->get();

    $response = $this->get('/courses/latest');

    $response->assertViewIs('user.coursesSpecific');
    $response->assertViewHas('courses', $latestCourses);
    $response->assertViewHas('category', 'Latest');
    $response->assertStatus(200);

    // Case: Category is 'random'
    $courses = Course::factory()->count(12)->create();
    $randomCourses = Course::inRandomOrder()->get();

    $response = $this->get('/courses/random');

    $response->assertViewIs('user.coursesSpecific');
    $response->assertViewHas('courses', $randomCourses);
    $response->assertViewHas('category', 'Random');
    $response->assertStatus(200);

    // Case: Category is invalid
    $response = $this->get('/courses/invalid-category');

    $response->assertNotFound();
    $response->assertStatus(404);
    }

    public function testEditCourse()
    {
    $user = User::factory()->create();
    $this->actingAs($user);

    $course = Course::factory()->create(['creator_id' => $user->id]);

    $response = $this->put('/course/' . $course->id . '/edit', [
        'title' => 'Updated Title',
        'thumbnail' => UploadedFile::fake()->image('thumbnail.jpg'),
        'intro' => 'Updated Introduction',
        'description' => 'Updated Description'
    ]);

    $response->assertRedirect('/course/' . $course->id);
    $response->assertSessionHas('status', 'Course is edited!');
    $response->assertStatus(302);

    $course->refresh();

    $this->assertEquals('Updated Title', $course->title);
    // Assert other updated attributes

    // Case: Invalid input
    $response = $this->put('/course/' . $course->id . '/edit', [
        'title' => '', // Invalid title
        'thumbnail' => UploadedFile::fake()->image('thumbnail.jpg'),
        'intro' => 'Updated Introduction',
        'description' => 'Updated Description'
    ]);

    $response->assertSessionHasErrors(['title']);
    $response->assertStatus(302);
    }

    public function testSelectCourseToEdit()
    {
    $user = User::factory()->create();
    $this->actingAs($user);

    $course = Course::factory()->create(['creator_id' => $user->id]);

    $response = $this->get('/course/' . $user->id . '/edit/' . $course->id);

    $response->assertViewIs('user.editCourse');
    $response->assertViewHas('course', $course);
    $response->assertStatus(200);

    // Case: User is not the owner of the course
        $user2 = User::factory()->create();
        $this->actingAs($user2);

        $response = $this->get('/course/' . $user->id . '/edit/' . $course->id);

        $response->assertRedirect('/profile');
        $response->assertSessionHas('status', 'This is not your course!');
        $response->assertStatus(302);
    }

    public function testGetCourseCreation()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/course/create');

        $response->assertViewIs('user.createCourse');
        $response->assertStatus(200);
    }

    public function testCreateCourse()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post('/course/create', [
            'title' => 'New Course',
            'thumbnail' => UploadedFile::fake()->image('thumbnail.jpg'),
            'intro' => 'Introduction',
            'description' => 'Description',
            'tags' => 'tag1,tag2,tag3'
        ]);

        $response->assertRedirect('/');
        $response->assertSessionHas('status', 'Course was created!');
        $response->assertStatus(302);

        $this->assertDatabaseCount('courses', 1);
        $this->assertDatabaseHas('courses', [
            'title' => 'New Course',
            // Assert other attributes
        ]);

        $course = Course::first();
        $this->assertTrue($course->hasTag('tag1'));
        $this->assertTrue($course->hasTag('tag2'));
        $this->assertTrue($course->hasTag('tag3'));
    }

    public function testSaveCourse()
    {
        // Prepare the data
        $request = new \stdClass();
        $request->title = 'Test Course';
        $request->intro = 'Test Introduction';
        $request->description = 'Test Description';

        $course = new Course();

        // Call the method
        $controller = new CourseController();
        $controller->saveCourse($request, $course);

        // Assert the saved course
        $this->assertEquals('Test Course', $course->title);
        // Assert other attributes
    }
}
