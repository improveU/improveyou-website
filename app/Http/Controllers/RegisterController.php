<?php

namespace App\Http\Controllers;

use App\Models\User;


class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|profanity',
            'email' => 'required|email|max:255|unique:users,email|profanity',
            'password' => 'required|min:8|max:255|confirmed',
        ]);

        User::create($attributes);

        if (auth()->attempt($attributes)) {
            session()->regenerate();

            return redirect('/')->with('status', 'Your account has been created.');
        }
    }
}

