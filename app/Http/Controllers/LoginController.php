<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();

            return redirect('/')->with('status', 'Welcome Back!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('status', 'Goodbye!');
    }
}
