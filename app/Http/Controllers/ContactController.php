<?php

namespace App\Http\Controllers;

use App\Models\Report;

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
            'name' => 'required|profanity',
            'email' => 'required|email|profanity',
            'reason' => 'required|profanity',
            'description' => 'required|profanity'
        ]);

        $report = new Report();
        $report->name = $request->input('name');
        $report->email = $request->input('email');
        $report->reason = $request->input('reason');
        $report->description = $request->input('description');
        $report->save();

        return redirect()->back()->with('status', 'Report submitted successfully.');
    }
}
