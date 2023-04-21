<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function showCourse($id){
        $course = Course::findorFail($id);
        $tags = $course->tagNames();
        $course->views += 1;
        $course->save();


        return view('courseDetail', [
            'course' => $course,
            'description' => Str::markdown($course->course_description),
            'tags' => $tags
        ]);
    }

    public function listAllCourses(){
        return view('courses', [
            'courses' => Course::all(),
        ]);
    }
}
