<?php

namespace App\Http\Controllers\backend;
use Toastr;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Stock;
use App\Models\Row_item;
use App\Models\Purcheses;
use App\Models\Kitchen;
use App\Models\Unit;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stock=Stock::paginate(10);
        return view('backend.stocks.index',compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $item=Item::get();
        $row_item=Row_item::get();
        $purcheses=Purcheses::get();
        $kitchen=Kitchen::get();
        $unit=Unit::get();
        return view('backend.stocks.create',compact('item','row_item','purcheses','kitchen','unit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $stock= new Stock();
            $stock->item_id=$request->item_id;
            $stock->row_id=$request->row_id;
            $stock->purches_id=$request->purches_id;
            $stock->kitchen_id=$request->kitchen_id;
            $stock->unit_id=$request->unit_id;
            $stock->quentity=$request->quentity;
            $stock->price=$request->price;
           
            
        
            if($stock->save())
            return redirect()->route('stocks.index')->with('success','Successfully saved');
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
        $item=Item::get();
        $row_item=Row_item::get();
        $purcheses=Purcheses::get();
        $kitchen=Kitchen::get();
        $unit=Unit::get();
        
        $stock=Stock::findOrFail(encryptor('decrypt',$id));
        return view('backend.stocks.edit',compact('stock','item','row_item','purcheses','kitchen','unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
          
            $stock=Stock::findOrFail(encryptor('decrypt',$id));
            $stock->item_id=$request->item_id;
            $stock->row_id=$request->row_id;
            $stock->purches_id=$request->purches_id;
            $stock->kitchen_id=$request->kitchen_id;
            $stock->unit_id=$request->unit_id;
            $stock->quentity=$request->quentity;
            $stock->price=$request->price;
          
            if($stock->save())
            return redirect()->route('stocks.index')->with('success','Successfully saved');
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
    
        $stock=Stock::findOrFail(encryptor('decrypt',$id));
        
        if($stock->delete()){           
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
     
        }
    }
}
