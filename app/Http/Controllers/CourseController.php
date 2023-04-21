<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function root(){
        if (auth()->user()){
            if (auth()->user()->subscription_id == 0){
                return view('paymentOverview');
            } else {
                return view('courses', [
                    'courses' => Course::all(),
                ]);
            }
        } else {
            return view('index');
        }
    }
    public function showCourse($id){
        $course = Course::findorFail($id);
        $course->views += 1;
        $course->save();

        return view('courseDetail', [
            'course' => $course,
            'description' => Str::markdown($course->course_description)
        ]);
    }

    public function listAllCourses(){
        return view('courses', [
            'courses' => Course::all(),
        ]);
    }
}
