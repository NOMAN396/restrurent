<?php

namespace App\Http\Controllers\Backend;
use Toastr;
use App\Http\Controllers\Controller;
use App\Models\Purches_detail;
use App\Models\Purcheses;
use App\Models\Row_item;
use App\Models\Unit;
use Illuminate\Http\Request;


class Purches_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purches_detail=Purches_detail::paginate(10);
        return view('backend.purches_details.index',compact('purches_detail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $purchese = Purcheses::get();
        $row_item = Row_item::get();
        $unit = Unit::get();
        return view('backend.purches_details.create',compact('purchese','row_item','unit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $purches_detail= new Purches_detail();
            $purches_detail->purches_id=$request->purches_id;
            $purches_detail->row_item_id=$request->row_item_id;
            $purches_detail->unit_id=$request->unit_id;
            $purches_detail->quentity=$request->quentity;
            $purches_detail->price=$request->price;

            if($purches_detail->save())
            return redirect()->route('purches_details.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
            
         }catch(Exception $e){
    
            return redirect()->back()->withInput()->with('error','Please try again');
         }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Purches_detail $purches_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $purchese = Purcheses::get();
        $row_item = Row_item::get();
        $unit = Unit::get();
        $purches_detail=Purches_detail::findOrFail(encryptor('decrypt',$id));
        return view('backend.purches_details.edit',compact('purches_detail','purchese','row_item','unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        try{
          
            $purches_detail=Purches_detail::findOrFail(encryptor('decrypt',$id));
            $purches_detail->purches_id=$request->purches_id;
            $purches_detail->row_item_id=$request->row_item_id;
            $purches_detail->unit_id=$request->unit_id;
            $purches_detail->quentity=$request->quentity;
            $purches_detail->price=$request->price;
            
            if($purches_detail->save())
            return redirect()->route('purches_details.index')->with('success','Successfully saved');
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
        $purches_detail=Purches_detail::findOrFail(encryptor('decrypt',$id));
        
        if($purches_detail->delete()){          
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
     
        }
    }
}
