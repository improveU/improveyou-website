<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchQuery = $request->input('q');

        $courses = Course::where('title', 'LIKE', "%$searchQuery%")
            ->orWhere('course_description', 'LIKE', "%$searchQuery%")
            ->orWhere('introduction', 'LIKE', "%$searchQuery%")
            ->latest()
            ->get();

        $users = User::where('username', 'LIKE', "%$searchQuery%")
            ->orWhere('description', 'LIKE', "%$searchQuery%")
            ->latest()
            ->get();

        return response()->json([
            'courses' => $courses,
            'users' => $users
        ]);
    }
}
