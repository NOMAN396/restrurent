<?php

namespace App\Http\Controllers\Backend;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order=Order::paginate(10);
    return view('backend.orders.index',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer=Customer::get();

        return view('backend.orders.create',compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $order=new Order();
            $order->customer_id=$request->customer_id;
            $order->sub_amount=$request->sub_amount;
            $order->vat=$request->vat;
            $order->discount_type=$request->discount_type;
            $order->order_date=$request->order_date;
            $order->order_status=$request->order_status;
            $order->payment=$request->payment;
            $order->item_quentity=$request->item_quentity;
            $order->total_amount=$request->total_amount;
            $order->waiter_id=$request->waiter_id;
            if($order->save())
       
                return redirect()->route('orders.index')->with('success','Successfully saved');
            
            else
        
                return redirect()->back()->withInput()->with('error','Please try again');
        }
             
        catch(Exception $e){
            
            return redirect()->back()->withInput()->with('error','Please try again');
         }
    
         
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customer=Customer::get();
        $order=Order::findOrFail(encryptor('decrypt',$id));
        return view('backend.orders.edit',compact('order','customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
            $order=Order::findOrFail(encryptor('decrypt',$id));
            $order->customer_id=$request->customer_id;
            $order->sub_amount=$request->sub_amount;
            $order->vat=$request->vat;
            $order->discount_type=$request->discount_type;
            $order->order_date=$request->order_date;
            $order->order_status=$request->order_status;
            $order->payment=$request->payment;
            $order->item_quentity=$request->item_quentity;
            $order->total_amount=$request->total_amount;
            $order->waiter_id=$request->waiter_id;
            if($order->save())
                return redirect()->route('orders.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
        }
        catch(Exception $e){
           //dd($e);
    
            return redirect()->back()->withInput()->with('error','Please try again');
         }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order=Order::findOrFail(encryptor('decrypt',$id));
        if($order->delete()){            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
