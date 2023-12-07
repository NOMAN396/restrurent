<?php

namespace App\Http\Controllers\backend;
use Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order_detail;
use App\Models\Item;
use App\Models\Order;
class Order_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $order_detail=Order_detail::paginate(10);
        return view('backend.order_details.index',compact('order_detail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $item=Item::get();
        $order=Order::get();
                return view('backend.order_details.create',compact('item','order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         try{
        $order_detail= new Order_detail();
        $order_detail->order_id=$request->item_id;
        $order_detail->item_id=$request->item_id;
        $order_detail->quaintity=$request->quaintity;
        $order_detail->price=$request->price;


        if($order_detail->save())
        return redirect()->route('order_details.index')->with('success','Successfully saved');
    else
        return redirect()->back()->withInput()->with('error','Please try again');
    
        
     }catch(Exception $e){

        return redirect()->back()->withInput()->with('error','Please try again');
     }
     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
     {
        $item = Item::get();
        $order=Order::get();
    
        $order_detail=Order_detail::findOrFail(encryptor('decrypt',$id));
        return view('backend.order_details.edit',compact('order_detail','item','order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $order_detail=Order_detail::findOrFail(encryptor('decrypt',$id));
            $order_detail->order_id=$request->item_id;
            $order_detail->item_id=$request->item_id;
            $order_detail->quaintity=$request->quaintity;
            $order_detail->price=$request->price;       
            if($order_detail->save())
                return redirect()->route('order_details.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
            
        }catch(Exception $e){
           
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $order_detail=Order_detail::findOrFail(encryptor('decrypt',$id));
        if($order_detail->delete()){            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
