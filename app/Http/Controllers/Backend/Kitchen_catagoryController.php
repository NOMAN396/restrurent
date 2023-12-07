<?php

namespace App\Http\Controllers\Backend;
use Toastr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kitchen_catagory;
use App\Models\Kitchen;
use Exception;


class Kitchen_catagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $kitchen_catagory=Kitchen_catagory::paginate(10);
    return view('backend.kitchen_catagories.index',compact('kitchen_catagory'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return view('backend.kitchen_catagories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $kitchen_catagory= new Kitchen_catagory();
            $kitchen_catagory->name=$request->name;
            $kitchen_catagory->status=$request->status;
    
            if($kitchen_catagory->save())
            return redirect()->route('kitchen_catagories.index')->with('success','Successfully saved');
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
        $kitchen_catagory=Kitchen_catagory::findOrFail(encryptor('decrypt',$id));
        return view('backend.kitchen_catagories.edit',compact('kitchen_catagory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $kitchen_catagory=Catagory::findOrFail(encryptor('decrypt',$id));
            $kitchen_catagory->name=$request->name;
            $kitchen_catagory->status=$request->status;
    
            
            if($kitchen_catagory->save())
                return redirect()->route('kitchen_catagories.index')->with('success','Successfully saved');
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
        $kitchen_catagory=Kitchen_catagory::findOrFail(encryptor('decrypt',$id));   
        if($kitchen_catagory->delete()){           
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
