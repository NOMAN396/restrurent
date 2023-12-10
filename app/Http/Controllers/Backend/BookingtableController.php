<?php

namespace App\Http\Controllers\Backend;
use Toastr;
use App\Models\Bookingtable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class BookingtableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookingtable=Bookingtable::paginate(10);
        return view('backend.bookingtables.index',compact('bookingtable'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bookingtables.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $bookingtable= new Bookingtable();
            $bookingtable->name=$request->name;
            $bookingtable->email=$request->email;
            $bookingtable->phone=$request->phone;
            $bookingtable->date=$request->date;
            $bookingtable->time=$request->time;
            $bookingtable->people=$request->people;    
            if($bookingtable->save())
            return redirect()->route('bookingtables.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
            
         }catch(Exception $e){
    
            return redirect()->back()->withInput()->with('error','Please try again');
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(Bookingtable $bookingtable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bookingtable=Bookingtable::findOrFail(encryptor('decrypt',$id));
        return view('backend.bookingtables.edit',compact('bookingtable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
          
            $bookingtable=Bookingtable::findOrFail(encryptor('decrypt',$id));
            $bookingtable->name=$request->name;
            $bookingtable->email=$request->email;
            $bookingtable->phone=$request->phone;
            $bookingtable->date=$request->date;
            $bookingtable->time=$request->time;
            $bookingtable->people=$request->people; 
           
            if($bookingtable->save())
            return redirect()->route('bookingtables.index')->with('success','Successfully saved');
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
        $bookingtable=Bookingtable::findOrFail(encryptor('decrypt',$id));
        
        if($bookingtable->delete()){         
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
     
        }
    }
}
