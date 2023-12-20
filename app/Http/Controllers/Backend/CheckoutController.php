<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index(){
        return view('frontend.checkout');
    }

    public function store(Request $request){
        try{
            $checkout=new Checkout;
            $checkout->cart_data=$request->base64_encode(json_encode(session('cart')));
            $checkout->name=$request->name;
            $checkout->payment=$request->payment;

            if($checkout->save())
            return redirect()->route('checkouts.index');
        else
         return redirect()->back()->withInput()->with('error','please try again');
        }catch(Exception $e){
            return redirect()->back()->withInput()->with('error','please try again');
        }
    }
}
