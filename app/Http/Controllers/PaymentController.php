<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PaymentController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    
    public function payment()
    {
        $availablePlans =[
            'price_1I4sxuCXkxjfFK74WCSolEYE' => "Monthly",
            'price_1I4t0zCXkxjfFK74phJ7dXUH' => "Yearly",
         ];
        
        $data = [
            'intent' => auth()->user()->createSetupIntent(), 
            'plans'=> $availablePlans

        ];
        return view('payment1')->with($data);
    }

    public function subscribe(Request $request)
    {
        $user = auth()->user();
        $paymentMethod = $request->payment_method;

        $planId = $request->plan;
        $user->newSubscription('main', $planId)->create($paymentMethod);

        return response([
            'success_url'=> redirect()->intended('/')->getTargetUrl(),
            'message'=>'success'
        ]);

    }
}
