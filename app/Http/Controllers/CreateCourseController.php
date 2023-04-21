<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateCourseController extends Controller
{
    public function get()
    {
        return view('createCourse');
    }
    public function createCourse()
    {
        $course = new Course();
        $request = request();
        $request->validate([
            'title' => 'required|min:3|max:255',
            'thumbnail' => 'required|image',
            'intro' => 'required|max:255',
            'description' => 'required|max:16777215'
        ]);

        $request['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        $tags = explode(',', $request->get('tags'));

        $course->title = $request->get('title');
        $course->image_path = $request->get('thumbnail');
        $course->introduction = $request->get('intro');
        $course->course_description = $request->get('description');
        $course->views = 0;
        $course->creator_id = auth()->user()->id;
        $course->category_id = 1;//$request->get('category');
        $course->save();

        $course->tag($tags);

        return redirect('/')->with('status', 'Course is created!');
    }
}
