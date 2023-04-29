<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        $courses = Course::where('creator_id', $user->id)->get();

        session()->put('courses', $courses);

        return view('/profile', [
            'courses' => $courses,
        ]);
    }

    public function publicProfile($id)
    {
        $profile = User::select('id', 'username', 'description', 'profile_picture_path', 'subscription_id')
            ->where('id', $id)
            ->first();
        if (!$profile) return redirect()->route('home')->with('error', 'User not found.');

        $data = [
            'profile' => $profile
        ];

        if ($profile->subscription_id === 3) {
            $courses = Course::where('creator_id', $id)->get();
            $data['courses'] = $courses;
        }

        return view('profilePublic', $data);
    }



    public function updateProfile()
    {
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

        $courses = session()->get('courses');

        return redirect('/profile')->with([
            'status' => 'Profile updated',
            'courses' => $courses,
        ]);
    }

    public function updateProfilePicture()
    {
        $request = request();
        $request->validate([
            'profilePicture' => 'required|image|max:4096',
        ]);

        $user = User::findOrFail(auth()->user()->id);

        if ($user->profile_picture_path != '/profiles/defaultProfilePicture.svg') {
            Storage::delete($user->profile_picture_path);
        }

        $image = Image::make($request->file('profilePicture'))
            ->fit(200, 200)
            ->encode('webp', 90);

        $path = $request->file('profilePicture')->store('profiles');

        // Add webp extension to the stored image path
        $pathinfo = pathinfo($path);
        $webp_path = $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '.webp';
        Storage::put($webp_path, (string) $image);

        // Delete the original PNG image
        Storage::delete($path);

        $user->profile_picture_path = $webp_path;
        $user->save();

        $courses = session()->get('courses');

        return redirect('/profile')->with([
            'status' => 'Profile picture updated',
            'courses' => $courses,
        ]);
    }
}
