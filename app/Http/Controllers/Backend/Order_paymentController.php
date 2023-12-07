<?php

namespace App\Http\Controllers\Backend;
use Toastr;
use App\Http\Controllers\Controller;
use App\Models\Order_payment;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use Exception;
class Order_paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_payment=Order_payment::paginate(10);
        return view('backend.order_payments.index',compact('order_payment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $order = Order::get();
        $customer = Customer::get();
        return view('backend.order_payments.create', compact('order','customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $order_payment= new Order_payment();
            $order_payment->order_id=$request->order_id;
            $order_payment->customer_id=$request->customer_id;
            $order_payment->pay_amount=$request->pay_amount;
            $order_payment->pay_type=$request->pay_type;
            if($order_payment->save())
            return redirect()->route('order_payments.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
            
         }catch(Exception $e){
    
            return redirect()->back()->withInput()->with('error','Please try again');
         }  
    }

    /**
     * Display the specified resource.
     */
    public function show(Order_payment $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::get();
        $customer = Customer::get();
        $order_payment=Order_payment::findOrFail(encryptor('decrypt',$id));
        return view('backend.order_payments.edit',compact('order','customer','order_payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
          
            $order_payment=Order_payment::findOrFail(encryptor('decrypt',$id));
            $order_payment->order_id=$request->order_id;
            $order_payment->customer_id=$request->customer_id;
            $order_payment->pay_amount=$request->pay_amount;
            $order_payment->pay_type=$request->pay_type;
            if($order_payment->save())
                return redirect()->route('order_payments.index')->with('success','Successfully saved');
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
        $order_payment=Order_payment::findOrFail(encryptor('decrypt',$id));
          if($order_payment->delete()){
        Toastr::warning('Deleted Permanently!');
            return redirect()->back();
     
        }
    }
  
    }

