<?php

namespace App\Http\Controllers\Backend;
use Toastr;
use App\Models\Order;
use App\Models\Customer;

use App\Http\Controllers\Controller;
use App\Models\Purches_payment;
use Illuminate\Http\Request;

class Purches_paymentController extends Controller
{
/**
 * Display a listing of the resource.
 */
public function index()
{
$purches_payment=Purches_payment::paginate(10);
return view('backend.purches_payments.index',compact('purches_payment'));
}

/**
 * Show the form for creating a new resource.
 */
public function create()
{
$order = Order::get();
$customer = Customer::get();
return view('backend.purches_payments.create', compact('order','customer'));

}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
try{
$purches_payment= new Purches_payment();
$purches_payment->order_id=$request->order_id;
$purches_payment->customer_id=$request->customer_id;
$purches_payment->payment=$request->payment;
$purches_payment->paytype=$request->paytype;
if($purches_payment->save())
return redirect()->route('purches_payments.index')->with('success','Successfully saved');
else
return redirect()->back()->withInput()->with('error','Please try again');

}catch(Exception $e){

return redirect()->back()->withInput()->with('error','Please try again');
}
}

/**
 * Display the specified resource.
 */
public function show(Purches_payment $id)
{
//
}

/**
 * Show the form for editing the specified resource.
 */
public function edit($id)
{
{
$order = Order::get();
$customer = Customer::get();
$purches_payment=Purches_payment::findOrFail(encryptor('decrypt',$id));
return view('backend.purches_payments.edit',compact('order','customer','purches_payment'));
}
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request,$id)
{
try{

$purches_payment=Purches_payment::findOrFail(encryptor('decrypt',$id));
$purches_payment->order_id=$request->order_id;
$purches_payment->customer_id=$request->customer_id;
$purches_payment->payment=$request->payment;
$purches_payment->paytype=$request->paytype;
if($purches_payment->save())
return redirect()->route('purches_payments.index')->with('success','Successfully saved');
else
return redirect()->back()->withInput()->with('error','Please try again');


}catch(Exception $e){

return redirect()->back()->withInput()->with('error','Please try again');
}
}

/**
 * Remove the specified resource from storage.
 */
public function destroy($id)
{
$purches_payment=Purches_payment::findOrFail(encryptor('decrypt',$id));
if($purches_payment->delete()){
Toastr::warning('Deleted Permanently!');
return redirect()->back();

}
}
}
