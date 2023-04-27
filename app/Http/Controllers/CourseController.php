<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function root(){
        if (auth()->user()){
            if (auth()->user()->subscription_id == 0){
                return view('paymentOverview');
            } else {
                return $this->listAllCourses();
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
            'description' => Str::markdown($course->course_description),
        ]);
    }

    public function listAllCourses(){
        $courses = Course::all();
        $latest = collect($courses)->sortBy('created_at', SORT_DESC)->slice(0,4)->toArray();
        $random = collect($courses)->random(4)->toArray();
        $popular = collect($courses)->sortBy('views', SORT_DESC)->slice(0,4)->toArray();

        return view('courses', [
            'courses' => $courses,
            'random' => $random,
            'latest' => $latest,
            'popular' => $popular
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
