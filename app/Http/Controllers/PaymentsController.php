<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentsController extends Controller
{
    public function index(){
        return view('pages.payment');
    }

    public function donate(Request $request){

        $this->validate($request,[
            'amount' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        $amount = $request->input('amount').'00';

        $payment = new Payment();
        $payment->name = $request->input('name');
        $payment->phone = $request->input('phone');
        $payment->email = $request->input('email');
        $payment->amount = $request->input('amount');
        $payment->donation_course = $request->input('donation_course');
        $payment->date = date('d.m.Y');


// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_m52rQlAWfPQK8k1NTQCOXSrA
	
");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
            'amount' => $amount,
            'currency' => 'usd',
            'description' => 'Donation',
            'source' => $token,
        ]);

    }
}

