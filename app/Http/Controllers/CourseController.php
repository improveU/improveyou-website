<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function root()
    {
        if (auth()->user()) {
            if (auth()->user()->subscription_id == 0) {
                return view('paymentOverview');
            } else {
                return $this->listAllCourses();
            }
        } else {
            return view('index');
        }
    }

    public function showCourse($id)
    {
        $course = Course::findorFail($id);
        $course->views += 1;
        $course->save();


        return view('courseDetail', [
            'course' => $course,
            'description' => Str::markdown($course->course_description),
        ]);
    }

    public function listAllCourses()
    {
        $courses = Course::all();
        $latest = collect($courses)->sortBy('created_at', SORT_DESC)->slice(0, 4)->toArray();
        $random = collect($courses)->random(4)->toArray();
        $popular = collect($courses)->sortBy('views', SORT_DESC)->slice(0, 4)->toArray();

        return view('courses', [
            'courses' => $courses,
            'random' => $random,
            'latest' => $latest,
            'popular' => $popular
        ]);
    }

    public function search()
    {
        if (request('search')) {
            $courses = Course::latest();
            $users = User::latest();

            $courses
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('course_description', 'like', '%' . request('search') . '%')
                ->orWhere('introductions', 'like', '%' . request('search') . '%');

            $users
                ->where('username', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');

            return view('form', [
                'users' => $users,
                'courses' => $courses
            ]);
        }
    }

    public function editCourse($courseId)
    {
        $course = Course::findOrFail($courseId);

        if($course->creator_id !== auth()->user()->id){
            redirect('/')->with('status', 'This is not your Course');
        }

        $request = request();
        $request->validate([
            'title' => 'required|min:3|max:255',
            'intro' => 'required|max:255',
            'description' => 'required|max:16777215'
        ]);

        $tags = explode(',', $request->get('tags'));
        $course->retag($tags);

        $this->saveCourse($request, $course);

        return redirect('/course/' . $courseId)->with('status', 'Course is edited!');
    }

    public function selectCourseToEdit($userId, $courseId)
    {
        $user = auth()->user();

        if ($user && $userId == $user->id) {
            $course = Course::where('id', $courseId)
                ->where('creator_id', $user->id)
                ->firstOrFail();

            return view('editCourse', [
                'course' => $course
            ]);
        }

        return redirect('/profile')->with('status', 'This is not your course!');
    }

    public function getCourseCreation()
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

        $this->saveCourse($request, $course);

        $course->tag($tags);

        return redirect('/')->with('status', 'Course is created!');
    }

    public function saveCourse(mixed $request, $course): void
    {
        $course->title = $request->get('title');
        $course->introduction = $request->get('intro');
        $course->course_description = $request->get('description');
        $course->views = 0;
        $course->creator_id = auth()->user()->id;

        //if the request has a new thumbnail
        if(isset($request->thumbnail)){
            //store it
            $request['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
            //delete the old one

            if ($course->image_path !== null) {
                Storage::delete($course->image_path);
            }

            //set the new one
            $course->image_path = $request->get('thumbnail');
        }


        $course->category_id = 0;
        $course->save();
    }
}
