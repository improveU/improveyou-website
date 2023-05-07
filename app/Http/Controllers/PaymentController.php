<?php

namespace App\Http\Controllers;

use App\Models\User;

class PaymentController extends Controller
{
    public function showOverview()
    {
        return view('user.paymentOverview');
    }

    public function selectModel($id)
    {
        return view('payment', ['id' => $id]);
    }

    public function storeData($id)
    {
        $request = request();
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'address' => 'required',
        ]);

        $user = User::findOrFail(auth()->user()->id);

        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->city = $request->get('city');
        $user->country = $request->get('country');
        $user->address = $request->get('address');
        $user->zip_code = $request->get('postal_code');
        $user->subscription_id = $id;

        $user->save();
        return redirect('/')->with('status', 'Your subscription is now active');
    }
}
