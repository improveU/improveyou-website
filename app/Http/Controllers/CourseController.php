<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function show($id){
        $course = Course::findorFail($id);
        $description = Str::markdown($course->course_description);

        return view('courseDetail',
        [
            'course' => $course,
            'description' => $description
        ]);
    }
}
