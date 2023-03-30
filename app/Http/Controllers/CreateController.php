<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function createCourse()
    {
        $request = request();
        $request->validate([
            'title' => 'required|min:3|max:255',
            'thumbnail' => 'required|image',
            'intro' => 'required|max:255',
        ]);

        $request['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        $course = new Course();

        $course->title = $request->get('title');
        $course->image_path = $request->get('thumbnail');
        $course->introduction = $request->get('intro');
        $course->course_description = 'NOT EMPTY';
        $course->views = 0;
        $course->creator_id = 1; //user()->id oder so
        $course->category_id = 1;//$request->get('category');

        $course->save();
        return redirect('/');
    }
}
