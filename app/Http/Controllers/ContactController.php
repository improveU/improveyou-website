<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }
}
