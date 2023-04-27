<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show(){
        return view('payment');
    }

    public function selector($id){
        return view('payment', ['id' => $id]);
    }

    public function storeData(){
        $request = request()->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ]);

        $user = User::findOrFail(auth()->user()->id);
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->city = $request->get('city');
        $user->country = $request->get('country');
        $user->address = $request->get('address');
        $user->house_number = $request->get('house_number');
        $user->zip_code = $request->get('zip_code');
        $user->subscription_id = $request->get('subscription_id');
    }
}
