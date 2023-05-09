<?php

use App\Http\Controllers\CourseController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\GenericUser;
use Illuminate\Support\Str;

class CourseControllerTest extends TestCase
{
    use RefreshDatabase;
    public function testRoot()
    {
        // Simulate authenticated user with subscription_id = 0
        $user = User::factory()->create(['subscription_id' => 0]);
        $this->actingAs($user);

        $response = $this->get('/');
        $response->assertRedirect('payment');
    }
public function testEditCourse()
{
    // Simulate authenticated user
    $user = User::factory()->create();
    $this->actingAs($user);

    $course = Course::factory()->create();
    $newTitle = 'New Course Title';
    $newIntro = 'New Course Introduction';
    $newDescription = 'New Course Description';

    $response = $this->post("/editCourse/{$course->id}", [
        'title' => $newTitle,
        'intro' => $newIntro,
        'description' => $newDescription,
    ]);
    $response->assertRedirect("/course/{$course->id}");

    $updatedCourse = Course::find($course->id);
    $this->assertEquals($newTitle, $updatedCourse->title);
    $this->assertEquals($newIntro, $updatedCourse->introduction);
    $this->assertEquals($newDescription, $updatedCourse->course_description);
}
public function testShowCourse()
{
    $user = User::factory()->create();
    $course = Course::factory()->create();
    $course->creator_id = $user->id;
    $course->save();

    $response = $this->actingAs($user)->get('/course/' . $course->id);

    $response->assertStatus(200);
    $response->assertViewHas('course', $course);
    $response->assertViewHas('description', Str::markdown($course->course_description));
    $response->assertViewHas('creator', $user);
}
public function testListSpecificCoursesInvalidCategory()
{
    $category = 'invalid';
    Course::factory()->count(12)->create();

    $response = $this->get('/courses/' . $category);

    $response->assertStatus(302);
}

    
}
