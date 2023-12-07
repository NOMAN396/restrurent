<?php

namespace App\Http\Controllers\Backend;
use App\Models\Waiter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;
class WaiterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $waiter=Waiter::paginate(10);
        return view('backend.waiters.index',compact('waiter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.waiters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $waiter= new Waiter();
            $waiter->name=$request->name;
            $waiter->designation_id=$request->designation_id;
            $waiter->contact=$request->contact;
            $waiter->present_address=$request->present_address;
            $waiter->permanent_address=$request->permanent_address;
            $waiter->status=$request->status;
        

            if($waiter->save())
            return redirect()->route('waiters.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
            
         }catch(Exception $e){
    
            return redirect()->back()->withInput()->with('error','Please try again');
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(Waiter $waiter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
        $waiter=Waiter::findOrFail(encryptor('decrypt',$id));
        return view('backend.waiters.edit',compact('waiter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        try{
          
            $waiter=Waiter::findOrFail(encryptor('decrypt',$id ));
            $waiter->name=$request->name;
            $waiter->designation_id=$request->designation_id;
            $waiter->contact=$request->contact;
            $waiter->present_address=$request->present_address;
            $waiter->permanent_address=$request->permanent_address;
            $waiter->status=$request->status;
            if($waiter->save())
            return redirect()->route('waiters.index')->with('success','Successfully saved');
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
    {$waiter=Waiter::findOrFail(encryptor('decrypt',$id));
        
        if($waiter->delete()){
                     
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
     
        }
    }
}
