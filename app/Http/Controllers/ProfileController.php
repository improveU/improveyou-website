<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(){
        return redirect('/profile/settings');
    }

    public function updateUser(){
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

        return redirect('/profile')->with('status', 'Profile updated');
    }

    public function sideMenu($param){

        return view('/profile', ['param' => $param]);
    }

}
