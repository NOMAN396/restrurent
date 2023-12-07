<?php

namespace App\Http\Controllers\Backend;
use Toastr;
use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier=Supplier::paginate(10);
        return view('backend.suppliers.index',compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $supplier= new Supplier();
            $supplier->sub_amount=$request->sub_amount;
            $supplier->vat=$request->vat;
            $supplier->discount=$request->discount;
            $supplier->discount_type=$request->discount_type;
            $supplier->payment=$request->payment;
            $supplier->total=$request->total;
            $supplier->item_quentity=$request->item_quentity;
            $supplier->order_date=$request->order_date;
            $supplier->order_status=$request->order_status;

            if($supplier->save())
            return redirect()->route('suppliers.index')->with('success','Successfully saved');
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
        $supplier=Supplier::findOrFail(encryptor('decrypt',$id));
        return view('backend.suppliers.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        try{
          
            $supplier=Supplier::findOrFail(encryptor('decrypt',$id));
            $supplier->sub_amount=$request->sub_amount;
            $supplier->vat=$request->vat;
            $supplier->discount=$request->discount;
            $supplier->discount_type=$request->discount_type;
            $supplier->payment=$request->payment;
            $supplier->total=$request->total;
            $supplier->item_quentity=$request->item_quentity;
            $supplier->order_status=$request->order_status;
            $supplier->order_date=$request->order_date;

            if($item->save())
            return redirect()->route('suppliers.index')->with('success','Successfully saved');
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
        $supplier=Supplier::findOrFail(encryptor('decrypt',$id));
        
        if($supplier->delete()){
                     
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
     
        }
    }
    }
