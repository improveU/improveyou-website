<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        $courses = Course::select('id', 'title', 'introduction', 'image_path')
            ->where('title', 'LIKE', '%' . $query . '%')
            ->get();

        $users = User::select('id', 'username', 'profile_picture_path')
            ->where('username', 'LIKE', '%' . $query . '%')
            ->get();

        return response()->json([
            'courses' => $courses,
            'users' => $users
        ]);
    }
    public function showResults(Request $request)
    {
        $query = $request->input('q');

        $courses = Course::where('title', 'LIKE', '%' . $query . '%')
            ->get();

        $users = User::where('username', 'LIKE', '%' . $query . '%')
            ->get();

        /*
        $courses = Course::select('id', 'title', 'introduction', 'image_path')
            ->where('title', 'LIKE', '%' . $query . '%')
            ->get();

        $users = User::select('id', 'username', 'profile_picture_path')
            ->where('username', 'LIKE', '%' . $query . '%')
            ->get();
        */

        return view('search', [
            'query' => $query,
            'courses' => $courses,
            'profiles' => $users
        ]);
    }

}
