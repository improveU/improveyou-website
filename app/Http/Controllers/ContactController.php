<?php

namespace App\Http\Controllers;

use App\Models\Event;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send()
    {
        $request = request();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'reason' => 'required',
            'description' => 'required'
        ]);

        //send email
    }
}
