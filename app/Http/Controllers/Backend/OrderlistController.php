<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Orderlist;
use  App\Models\Item;
use App\Models\Waiter;
use Illuminate\Http\Request;
use Toastr;

class OrderlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oderlist=Orderlist::paginate(10);
        return view('backend.orderlists.index',compact('oderlist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $waiter = Waiter::get();
        $item = Item::get();
        return view('backend.orderlists.create',compact('waiter','item'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        try{
            $oderlist= new Orderlist();
            $oderlist->table_no=$request->table_no;
            $oderlist->waiter_id=$request->waiter_id;
            $oderlist->bill_type=$request->bill_type;
            $oderlist->item=$request->item;
            $oderlist->quentity=$request->quentity;
            
            $oderlist->save();
            return redirect()->route('orderlists.index')->with('status', 'Blog Post Form Data Has Been inserted');
        
        
            if($oderlist->save())
            return redirect()->route('orderlists.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
            
         }catch(Exception $e){
    
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Orderlist $orderlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $waiter = Waiter::get();
        $item = Item::get();
        $oderlist=Orderlist::findOrFail(encryptor('decrypt',$id));
        return view('backend.orderlists.edit',compact('oderlist','waiter','item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
          
            $oderlist=Orderlist::findOrFail(encryptor('decrypt',$id));
            $oderlist->table_no=$request->table_no;
            $oderlist->waiter_id=$request->waiter_id;
            $oderlist->bill_type=$request->bill_type;
            $oderlist->item=$request->item;            
            $oderlist->quentity=$request->quentity;
            
           
            if($oderlist->save())
            return redirect()->route('orderlists.index')->with('success','Successfully saved');
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
        $oderlist=Orderlist::findOrFail(encryptor('decrypt',$id));
        
        if($oderlist->delete()){         
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
     
        }
    }
}
