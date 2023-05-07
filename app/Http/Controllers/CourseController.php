<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Models\ReportQuick;

class CourseController extends Controller
{
    public function root()
    {
        $user = auth()->user();

        if ($user && $user->subscription_id == 0) return redirect('payment');

        return $user ? $this->listAllCourses() : view('index');
    }

    public function showCourse($id)
    {
        if (auth()->user()->subscription_id != 0) {
            $course = Course::findorFail($id);
            $course->views += 1;
            $course->save();

            $creator = User::where('id', $course->creator_id)->first();

            return view('user.courseDetail', [
                'course' => $course,
                'description' => Str::markdown($course->course_description),
                'creator' => $creator,
            ]);
        } else {
            return redirect('/');
        }
    }

    public function listAllCourses()
    {
        $courses = Course::all()->take(4);
        $latest = Course::latest()->take(4)->get();
        $random = Course::inRandomOrder()->take(4)->get();
        $popular = Course::orderBy('views', 'desc')->take(4)->get();

        return view('user.courses', [
            'courses' => $courses,
            'random' => $random,
            'latest' => $latest,
            'popular' => $popular
        ]);
    }

    public function listSpecificCourses($category)
    {
        if ($category === 'all') $output = Course::paginate(12);
        else if ($category === 'popular') $output = Course::orderBy('views', 'desc')->paginate(12);
        else if ($category === 'latest') $output = Course::latest()->paginate(12);
        else if ($category === 'random') $output = Course::inRandomOrder()->paginate(12);
        else abort(404);

        return view('user.coursesSpecific', [
            'courses' => $output,
            'category' => ucfirst($category)
        ]);
    }

    public function editCourse($courseId)
    {
        $course = Course::findOrFail($courseId);

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

    public function deleteCourse($courseId)
    {
        $course = Course::findOrFail($courseId);
        $course->delete();

        ReportQuick::where('course_id', $courseId)->delete();

        return redirect('/')->with('status', 'Course deleted!');
    }

    public function selectCourseToEdit($userId, $courseId)
    {
        $user = auth()->user();
        if ($userId == $user->id || $user->subscription_id == 4) {
            $course = Course::where('id', $courseId)->firstOrFail();
            if($course->description == null) $course->description = 'Error';
            $course->description = Str::markdown($course->description);

            return view('user.editCourse', [
                'course' => $course
            ]);
        } else {
            return redirect('/profile')->with('status', 'This is not your course!');
        }
    }


    public function getCourseCreation()
    {
        return view('user.createCourse');
    }

    public function createCourse()
    {
        $course = new Course();
        $request = request();
        $request->validate([
            'title' => 'required|min:3|max:255',
            'thumbnail' => 'required|image|max:8192',
            'intro' => 'required|max:255',
            'description' => 'required|max:16777215'
        ]);

        $tags = explode(',', $request->get('tags'));
        $this->saveCourse($request, $course);
        $course->tag($tags);

        return redirect('/')->with('status', 'Course was created!');
    }

    public function saveCourse(mixed $request, $course): void
    {
        $course->title = $request->get('title');
        $course->introduction = $request->get('intro');
        $course->course_description = $request->get('description');
        $course->views = 0;
        $course->creator_id = auth()->user()->id;

        if ($request->has('thumbnail')) {

            $thumbnail = Image::make($request->file('thumbnail'))
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('webp', 90);

            $path = $request->file('thumbnail')->store('thumbnails');
            $pathinfo = pathinfo($path);
            $webp_path = $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '.webp';

            Storage::put($webp_path, (string)$thumbnail);
            Storage::delete($path);

            $course->image_thumbnail_path = $webp_path;

            $cover = Image::make($request->file('thumbnail'))
                ->resize(1600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('webp', 80);

            $path = $request->file('thumbnail')->store('covers');
            $pathinfo = pathinfo($path);
            $webp_path = $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '.webp';

            Storage::put($webp_path, (string)$cover);
            Storage::delete($path);

            $course->image_cover_path = $webp_path;
        }

        $course->save();
    }

}
