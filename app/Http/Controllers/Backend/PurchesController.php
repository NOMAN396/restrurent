<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Purcheses;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Toastr;

class PurchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchese=Purcheses::paginate(10);
        return view('backend.purcheses.index',compact('purchese'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = Supplier::get();
        return view('backend.purcheses.create',compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $purchese= new Purcheses();
            $purchese->supplier_id=$request->supplier_id;
            $purchese->su_amount=$request->su_amount;
            $purchese->vat=$request->vat;
            $purchese->discount=$request->discount;
            $purchese->ddiscount_type=$request->ddiscount_type;
            $purchese->payment=$request->payment;
            $purchese->total_amount=$request->total_amount;
           
            if($purchese->save())
            return redirect()->route('purcheses.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
            
         }catch(Exception $e){
    
            return redirect()->back()->withInput()->with('error','Please try again');
         }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Purcheses $purches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = Supplier::get();
        $purchese=Purcheses::findOrFail(encryptor('decrypt',$id));
        return view('backend.purcheses.edit',compact('purchese','supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
          
            $purchese=Purcheses::findOrFail(encryptor('decrypt',$id));
            $purchese->supplier_id=$request->supplier_id;
            $purchese->su_amount=$request->su_amount;
            $purchese->vat=$request->vat;
            $purchese->discount=$request->discount;
            $purchese->ddiscount_type=$request->ddiscount_type;
            $purchese->payment=$request->payment;
            $purchese->total_amount=$request->total_amount;
           
            
           
            if($purchese->save())
            return redirect()->route('purcheses.index')->with('success','Successfully saved');
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
        $purchese=Purcheses::findOrFail(encryptor('decrypt',$id));  
        if($purchese->delete()){
           
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
     
        }
    }
}
