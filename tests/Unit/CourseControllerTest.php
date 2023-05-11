<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Str;

class CourseControllerTest extends TestCase
{
    use RefreshDatabase;
    public function testRoot()
    {
        $user = User::factory()->create(['subscription_id' => 0]);
        $this->actingAs($user);

        $response = $this->get('/');
        $response->assertRedirect('payment');
    }
public function testEditCourse()
{
    $user = User::factory()->create(['subscription_id' => 3]);
    $this->actingAs($user);
    
    $course = Course::factory()->create();
    $newTitle = 'Hallo';
    $newIntro = 'Bein';
    $newDescription = 'Stras';

    $this->post("/editCourse/{$course->id}", [
        'title' => $newTitle,
        'intro' => $newIntro,
        'description' => $newDescription,
    ]);

    $updatedCourse = Course::findorFail($course->id);

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
