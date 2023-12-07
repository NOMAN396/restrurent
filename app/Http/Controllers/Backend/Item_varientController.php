<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Item_varient;
use App\Models\Item;
use Illuminate\Http\Request;
use Toastr;
class Item_varientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item_varient=Item_varient::paginate(5);
        return view('backend.item_varients.index',compact('item_varient'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $item = Item::get();
        return view('backend.item_varients.create',compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    try{
        $item_varient=new Item_varient();
        $item_varient->item_id=$request->item_id;
        $item_varient->varient_name=$request->varient_name;
        $item_varient->price=$request->price;

        if($item_varient->save())
        return redirect()->route('item_varients.index')->with('success','Successfully saved');
        else
        return redirect()->back()->withInput()->with('error','Please try again');
    
    }catch(Exception $e){
        return redirect()->back()->withInput()->with('error','Please try again');

               }

    }

    /**
     * Display the specified resource.
     */
    public function show(Item_varient $item_varient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item_varient $item_varient)
    {
        $item_varient=Item_varient::findOrFail(encryptor('decrypt',$id));
        return view('backend.item_varients.edit',compact('item_varient')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item_varient $item_varient)
    {
        try{
            $item_varient=Item_varient::findOrFail(encryptor('decrypt',$id));
            $item_varient->item_id=$request->item_id;
            $item_varient->varient_name=$request->varient_name;
            $item_varient->price=$request->price;
    
            if($item_varient->save())
            return redirect()->route('item_varients.index')->with('success','Successfully saved');
            else
            return redirect()->back()->withInput()->with('error','Please try again');
        
        }catch(Exception $e){
            return redirect()->back()->withInput()->with('error','Please try again');
    
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item_varient $item_varient)
    {
        $item_varient=Item_varient::findOrFail(encryptor('decrypt',$id));
        if($item_varient->delete()){
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
