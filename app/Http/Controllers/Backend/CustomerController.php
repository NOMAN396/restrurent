<?php

namespace App\Http\Controllers\backend;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Toastr;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer=Customer::paginate(10);
        return view('backend.customers.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         try{
            $customer= new Customer();
            $customer->customer_name=$request->customer_name;
            $customer->contact=$request->contact;
            $customer->address=$request->address;
            $customer->birthdate=$request->birthdate;
            if($customer->save())
            return redirect()->route('customers.index')->with('success','Successfully saved');
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
        $customer=Customer::findOrFail(encryptor('decrypt',$id));
        return view('backend.customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $customer=Customer::findOrFail(encryptor('decrypt',$id));
            $customer->name=$request->name;
            $customer->contact=$request->contact;
            $customer->address=$request->address;
            $customer->birthdate=$request->birthdate;
            if($customer->save())
                return redirect()->route('customers.index')->with('success','Successfully saved');
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
        $customer=Customer::findOrFail(encryptor('decrypt',$id));
     if($customer->delete()){         
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
