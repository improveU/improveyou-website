<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show(){

        $user = auth()->user();
        $courses = Course::where('creator_id', $user->id)->get();

        return view('/profile', [
            'user' => $user,
            'courses' => $courses,
        ]);
    }

    public function updateProfile(){
        $request = request();
        $request->validate([
            'username' => ['required', 'max:255'],
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255']
        ]);

        $user = User::findOrFail(auth()->user()->id);

        $user->username = $request->get('username');
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->email = $request->get('email');
        $user->save();

        return view('/profile')->with('status', 'Profile updated');
    }

    public function updateProfilePicture(){
        $request = request();
        $request->validate([
            'profilePicture' => 'required|image|max:4096',
        ]);

        $request['profilePicture'] = request()->file('profilePicture')->store('profiles');

        $user = User::findOrFail(auth()->user()->id);

        if ($user->profile_picture_path != '/profiles/defaultProfilePicture.svg'){
            Storage::delete($user->profile_picture_path);
        }

        $user->profile_picture_path = $request->get('profilePicture');
        $user->save();

        return view('/profile')->with('status', 'Profile picture updated');
    }
}
