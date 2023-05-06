<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = auth()->user();
        $courses = Course::where('creator_id', $user->id)->get();
        $activeTab = $request->query('tab') ?? session('activeTab');

        session()->put('activeTab', $activeTab);
        session()->put('courses', $courses);

        $description = $profile->description ?? 'No description yet';

        return view('/profile', [
            'courses' => $courses,
            'description' => Str::markdown($description),
            'activeTab' => $activeTab,
        ]);
    }

    public function publicProfile($id)
    {
        $profile = User::select('id', 'username', 'description', 'email', 'profile_picture_path', 'subscription_id')
            ->where('id', $id)
            ->first();

        if (!$profile) return redirect()->route('home')->with('error', 'User not found.');

        $description = $profile->description ?? 'No description yet';
        $data = [
            'profile' => $profile,
            'description' => Str::markdown($description),
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
            'username' => ['required', 'max:255', Rule::unique('users')->ignore(auth()->id())],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['nullable', 'confirmed', 'min:8'],
        ]);

        $user = User::findOrFail(auth()->user()->id);

        $user->username = $request->get('username');
        $user->email = $request->get('email');

        if ($request->has('password') && !empty($request->get('password'))) {
            $user->setPasswordAttribute($request->get('password'));
        }

        $user->save();

        $courses = session()->get('courses');
        $activeTab = session('activeTab');

        return redirect('/profile#' . $activeTab)->with([
            'status' => 'Profile updated',
            'courses' => $courses,
        ])->withInput();
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

        $pathinfo = pathinfo($path);
        $webp_path = $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '.webp';

        Storage::put($webp_path, (string)$image);
        Storage::delete($path);

        $user->profile_picture_path = $webp_path;
        $user->save();

        session()->put('activeTab', 'profile');
        $courses = session()->get('courses');
        $activeTab = session('activeTab');

        return redirect('/profile#' . $activeTab)->with([
            'status' => 'Profile picture updated',
            'courses' => $courses,
        ]);
    }

    public function updateProfileDescription()
    {
        $activeTab = request()->input('activeTab', 'profileOverview');

        $user = Auth::user();
        $currentDescription = $user->description;
        $request = request();
        $request->validate([
            'description' => 'string|max:3000',
        ]);

        $newDescription = $request->input('description');
        $courses = $user->courses;
        session()->put('activeTab', 'profileDescriptionEdit');

        if ($currentDescription !== $newDescription) {
            $user->description = $newDescription;
            $user->save();

            return redirect('/profile#' . $activeTab)->with([
                'status' => 'Profile description updated',
                'courses' => $courses,
            ]);
        }

        return redirect('/profile#' . $activeTab)->with([
            'status' => 'No changes detected',
            'courses' => $courses,
        ]);
    }

    public function updateBilling()
    {
        if (auth()->user()->subscription_id != 0) {
            $request = request();
            $request->validate([
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'city' => 'required',
                'postal_code' => 'required',
                'address' => 'required',
            ]);

            $user = auth()->user();

            $user->first_name = $request->get('first_name');
            $user->last_name = $request->get('last_name');
            $user->city = $request->get('city');
            $user->address = $request->get('address');
            $user->zip_code = $request->get('postal_code');

            $user->save();

            $activeTab = request()->input('activeTab', 'profileOverview');
            $courses = $user->courses;
            session()->put('activeTab', 'profileDescriptionEdit');

            return redirect('/profile#' . $activeTab)->with([
                'status' => 'Billing updated',
                'courses' => $courses,
            ]);
        } else {
            return redirect('/')->with('status', 'No Subscription selected');
        }
    }
}
