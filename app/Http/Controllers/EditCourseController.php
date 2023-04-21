<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Tag;

class EditCourseController extends Controller
{
    public function show($userId, $courseId)
    {
        $user = auth()->user();

        if ($user && $userId == $user->id) {
            $course = Course::where('id', $courseId)
                ->where('creator_id', $user->id)
                ->firstOrFail();
            //TODO redirect und kein error 404 (firstOrFail();)

            return view('editCourse', [
                'course' => $course
            ]);
        }

        return redirect('/profile')->with('status', 'This is not your course!');
    }

    public function editCourse($courseId)
    {
        $course = Course::where('id', $courseId);
        $request = request();

        //TODO validate + redirect if course->creator_id != auth->user->id

        return redirect('/course' . $course->id )->with('status', 'Course is edited!');
    }
}
