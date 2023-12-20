<?php

namespace App\Http\Controllers\Backend;
use Toastr;
use  App\Models\Item;
use  App\Models\Catagory;
use  App\Models\Kitchen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use File;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item=Item::paginate(12);
        return view('backend.items.index',compact('item'));
    }

    /**
    
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kitchen = Kitchen::get();
        $catagory = Catagory::get();
        return view('backend.items.create',compact('catagory','kitchen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $item= new Item();
            $item->item_name=$request->item_name;
            $item->catagory_id=$request->catagory_id;
            $item->kitchen_id=$request->kitchen_id;
            $item->cocking_type=$request->cocking_type;
            $item->description=$request->description;
           
            
            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/items'), $imageName);
                $item->image=$imageName;
            }
            if($item->save())
            return redirect()->route('items.index')->with('success','Successfully saved');
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
        $kitchen = Kitchen::get();
        $catagory = Catagory::get();
        
        $item=Item::findOrFail(encryptor('decrypt',$id));
        return view('backend.items.edit',compact('item','kitchen','catagory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
          
            $item=Item::findOrFail(encryptor('decrypt',$id));
            $item->item_name=$request->item_name;
            $item->catagory_id=$request->catagory_id;
            $item->kitchen_id=$request->kitchen_id;
            $item->cocking_type=$request->cocking_type;
            $item->description=$request->description;
           
            
            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/items'), $imageName);
                $item->image=$imageName;
            }
            if($item->save())
            return redirect()->route('items.index')->with('success','Successfully saved');
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
        $item=Item::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/items/').$item->image;
        
        if($item->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
     
        }
    }
  
}
