<?php

namespace App\Http\Controllers\Backend;
use App\Models\Customer;
use  App\Models\Item;
use App\Models\Waiter;
use App\Models\Item_varient;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
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
        $item=Item::get();
        $waiter=Waiter::get();

        return view('backend.orders.create',compact('waiter','customer','item'));
    }
    public function get_varient(Request $request)
    {
        $varient=Item_varient::where('item_id',$request->item_id)->get();
        $opt='<option value="">Select Varient</option>';
        if($varient){
            foreach($varient as $v){
                $opt.='<option data-price="'.$v->price.'" value="'.$v->id.'">'.$v->varient_name.'-'.$v->price.'</option>';
            }
        }
        echo json_encode($opt);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $order=new Order();
            $order->customer_id=$request->customer_id;
            $order->waiter_id=$request->waiter_id;
            $order->sub_amount=$request->sub_amount;
            $order->discount=$request->disamt;
            $order->order_date=$request->order_date;
            $order->order_status=1;
            $order->payment=$request->total_amount;
            $order->total_amount=$request->total_amount;
            if($order->save()){
                foreach($request->varientid as $i=>$vid){
                    $order_detail= new Order_detail();
                    $order_detail->order_id=$order->id;
                    $order_detail->item_id=$request->item_id[$i];
                    $order_detail->varient_id=$vid;
                    $order_detail->quaintity=$request->item_qty[$i];
                    $order_detail->price=$request->item_v_price[$i];
                    $order_detail->save();
                }
                return redirect()->route('orders.index')->with('success','Successfully saved');
            }else
                return redirect()->back()->withInput()->with('error','Please try again');
        }
             
        catch(Exception $e){
            
            return redirect()->back()->withInput()->with('error','Please try again');
         }
    
         
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order=Order::findOrFail(encryptor('decrypt',$id));
        return view('backend.orders.show',compact('order'));
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
