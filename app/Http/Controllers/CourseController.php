<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
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
        $latest = collect($courses)->sortByDesc('created_at')->take(4);
        $random = collect($courses)->random(4);
        $popular = collect($courses)->sortByDesc('views')->take(4);

        return view('courses', [
            'courses' => $courses,
            'random' => $random,
            'latest' => $latest,
            'popular' => $popular
        ]);
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
            'thumbnail' => 'image',
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

        $thumbnail = $request->file('thumbnail');
        $thumbnail_path = $thumbnail->store('thumbnails');

        $image = Image::make($thumbnail);
        $image->resize(1000, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $image->encode('webp', 70);
        $thumbnail_pathinfo = pathinfo($thumbnail_path);
        $webp_path = $thumbnail_pathinfo['dirname'] . '/' . $thumbnail_pathinfo['filename'] . '.webp';
        Storage::put($webp_path, (string) $image);
        Storage::delete($thumbnail_path);

        $request['thumbnail'] = $webp_path;

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
