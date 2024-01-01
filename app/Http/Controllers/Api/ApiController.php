<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use  App\Models\Item;
use  App\Models\Catagory;
use  App\Models\Kitchen;
use Illuminate\Http\Request;
use Exception;
use File;
class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function itemList($cat)
    {
        $item=Item::where('catagory_id',$cat)->get();
        $data=array();
        if($item){
            foreach($item as $it){
                $data[]=array(
                    'id'=>$it->id,
                    'item_name'=>$it->item_name,
                    'varient'=>$it->item_varient,
                    'image'=>asset('public/uploads/items/' . $it->image),
                );
            }
            return response($data, 200);
        }else{
            $msg=array('No Item found');
            return response($msg, 204);
        }


    }
    public function singleItem($id)
    {
        $item=Item::find($id);
        $data=array();
        $data[]=array(
            'id'=>$item->id,
            'item_name'=>$item->item_name,
            'varient'=>$item->item_varient,
            'description'=>$item->description,
            'kitchen'=>$item->kitchen?->name,
            'image'=>asset('public/uploads/items/' . $item->image),
        );
            
        return response($data, 200);
    }

    public function categories()
    {
        $cats=Catagory::get();
        return response($cats, 200);
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
