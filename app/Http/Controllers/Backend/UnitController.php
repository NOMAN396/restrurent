<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unit=Unit::paginate(10);
        return view('backend.units.index',compact('unit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.units.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $unit= new Unit();
            $unit->name=$request->name;
    
            
            if($unit->save())
            return redirect()->route('units.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
            
         }catch(Exception $e){
    
            return redirect()->back()->withInput()->with('error','Please try again');
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $unit=Unit::findOrFail(encryptor('decrypt',$id));
        return view('backend.units.edit',compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
            $unit=Unit::findOrFail(encryptor('decrypt',$id));
            $unit->name=$request->name;
    
            
            if($unit->save())
                return redirect()->route('units.index')->with('success','Successfully saved');
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
       
        $unit=Unit::findOrFail(encryptor('decrypt',$id));  
        if($unit->delete()){           
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
