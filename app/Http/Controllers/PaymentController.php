<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show(){
        return view('payment');
    }

    public function selector($id){
        return view('payment', ['id' => $id]);
    }
}
