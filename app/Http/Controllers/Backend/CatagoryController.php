<?php

namespace App\Http\Controllers\Backend;
use Toastr;
use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Exception;
use File;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catagory=Catagory::paginate(10);
        return view('backend.catagories.index',compact('catagory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('backend.catagories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     try{
        $catagory= new Catagory();
        $catagory->name=$request->name;
        $catagory->status=$request->status;

        
        if($request->hasFile('image')){
            $imageName = rand(111,999).time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/catagories'), $imageName);
            $catagory->image=$imageName;
        }
        if($catagory->save())
        return redirect()->route('catagories.index')->with('success','Successfully saved');
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

        $catagory=Catagory::findOrFail(encryptor('decrypt',$id));
        return view('backend.catagories.edit',compact('catagory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request  $request, string $id)
    {
        try{
            $catagory=Catagory::findOrFail(encryptor('decrypt',$id));
            $catagory->name=$request->name;
            $catagory->status=$request->status;
    
            
            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/catagories'), $imageName);
                $catagory->image=$imageName;
            }
            
            if($catagory->save())
                return redirect()->route('catagories.index')->with('success','Successfully saved');
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
        $catagory=Catagory::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/catagories/').$catagory->image;
        
        if($catagory->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
