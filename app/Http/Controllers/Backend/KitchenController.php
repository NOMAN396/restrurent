<?php

namespace App\Http\Controllers\Backend;
use Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kitchen;
use App\Models\Kitchen_catagory;
use Exception;
class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kitchen=Kitchen::paginate(10);
        return view('backend.kitchens.index',compact('kitchen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kitchen_catagory =Kitchen_catagory::get();
        return view('backend.kitchens.create',compact('kitchen_catagory'));

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $kitchen= new Kitchen;
            $kitchen->name=$request->name;
            $kitchen->kichen_catagories_id=$request->kichen_catagories_id;
            $kitchen->status=$request->status;
           
            if($kitchen->save())
            
            return redirect()->route('kitchens.index')->with('success','successfully saved');
     

            else
            return redirect()->back()->withInput()->with('error','please try again');
            
        }
        catch(Exception $e){
     dd($e);
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
        $kitchen=Kitchen::findOrFail(encryptor('decrypt',$id));
        return view('backend.kitchens.edit',compact('kitchen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $kitchen=Kitchen::findOrFail(encryptor('decrypt',$id));
            $kitchen->name=$request->name;
            $kitchen->kichen_catagories_id=$request->kichen_catagories_id;
            $kitchen->status=$request->status;
dd('kitchen');
            if($kitchen->save())
            return redirect()->route('kitchens.index')->with('success','successfully saved');

            else
            return redirect()->back()->withInput()->with('error','please try again');
        }
        catch(Exception $e){
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kitchen=Kitchen::findOrFail(encryptor('decrypt',$id));
        if($kitchen->delete()){
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
