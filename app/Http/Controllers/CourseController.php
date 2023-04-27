<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function root(){
        $user = auth()->user();

        return view(
            $user ? ($user->subscription_id == 0 ? 'paymentOverview' : 'courses') : 'index',
            ['courses' => Course::all()]
        );
    }

    public function showCourse($id){
        $course = Course::findorFail($id);
        $course->views += 1;
        $course->save();


        return view('courseDetail', [
            'course' => $course,
            'description' => Str::markdown($course->course_description),
        ]);
    }

    public function listAllCourses(){
        return view('courses', [
            'courses' => Course::all(),
        ]);
    }

    public function search()
    {
        if(request('search')){
            $courses = Course::latest();
            $creators = User::latest();

            $courses
                ->where('title', 'like', '%' .request('search'). '%')
                ->orWhere('course_description', 'like', '%' .request('search'). '%')
                ->orWhere('introductions', 'like', '%' .request('search'). '%');

            $creators
                ->where('username', 'like', '%' .request('search'). '%')
                ->where('subscription_id', 3);
        }
    }
}
