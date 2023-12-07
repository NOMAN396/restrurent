<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Purches_item;
use App\Models\Supplier;
use App\Models\Purcheses;
use Illuminate\Http\Request;
use Toastr;

class Purches_itemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purches_item=Purches_item::paginate(10);
        return view('backend.purches_items.index',compact('purches_item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = Supplier::get();
        $purchese = Purcheses::get();
        return view('backend.purches_items.create',compact('supplier','purchese'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $purches_item= new Purches_item();
            $purches_item->item_name=$request->item_name;
            $purches_item->purches_id=$request->purches_id;
            $purches_item->supplier_id=$request->supplier_id;

            if($purches_item->save())
            return redirect()->route('purches_items.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
            
         }catch(Exception $e){
    
            return redirect()->back()->withInput()->with('error','Please try again');
         }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Purches_item $purches_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = Supplier::get();
        $purchese = Purcheses::get();
        $purches_item=Purches_item::findOrFail(encryptor('decrypt',$id));
        return view('backend.purches_items.edit',compact('purches_item','supplier','purchese'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        try{
          
            $purches_item=Purches_item::findOrFail(encryptor('decrypt',$id));
            $purches_item->item_name=$request->item_name;
            $purches_item->purches_id=$request->purches_id;
            $purches_item->supplier_id=$request->supplier_id;

            if($purches_item->save())
            return redirect()->route('purches_items.index')->with('success','Successfully saved');
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
        $purches_item=Purches_item::findOrFail(encryptor('decrypt',$id));
        
        if($purches_item->delete()){
                     
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
     
        }
    }
}