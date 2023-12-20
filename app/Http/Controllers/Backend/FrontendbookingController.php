<?php

namespace App\Http\Controllers\Backend;
use Toastr;
use App\Models\Frontendbooking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class FrontendbookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fbookingtable=Frontendbooking::paginate(10);
        return view('backend.fontendbookings.index',compact('fbookingtable'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.fontendbookings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {    
        try{
            $fbookingtable= new Frontendbooking();
            $fbookingtable->name=$request->name;
            $fbookingtable->email=$request->email;
            $fbookingtable->phone=$request->phone;
            $fbookingtable->date=$request->date;
            $fbookingtable->time=$request->time;
            $fbookingtable->people=$request->people;    
            $fbookingtable->save();
            return redirect()->route('fontendbookings.index')->with('status', 'Blog Post Form Data Has Been inserted');
        
        
            if($fbookingtable->save())
            return redirect()->route('fontendbookings.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
            
         }catch(Exception $e){
    
            return redirect()->back()->withInput()->with('error','Please try again');
        }


    }


    /**
     * Display the specified resource.
     */
    public function show(Frontendbooking $frontendbooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
        $fbookingtable=Frontendbooking::findOrFail(encryptor('decrypt',$id));
        return view('backend.fontendbookings.edit',compact('fbookingtable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
          
            $fbookingtable=Frontendbooking::findOrFail(encryptor('decrypt',$id));
            $fbookingtable->name=$request->name;
            $fbookingtable->email=$request->email;
            $fbookingtable->phone=$request->phone;
            $fbookingtable->date=$request->date;
            $fbookingtable->time=$request->time;
            $fbookingtable->people=$request->people; 
           
            if($fbookingtable->save())
            return redirect()->route('fontendbookings.index')->with('success','Successfully saved');
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
        $fbookingtable=Frontendbooking::findOrFail(encryptor('decrypt',$id));
        
        if($fbookingtable->delete()){         
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
     
        }
    }
}
