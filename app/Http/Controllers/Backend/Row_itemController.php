<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Toastr;
use App\Models\Row_item;
use Illuminate\Http\Request;

class Row_itemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $row_item=Row_item::paginate(10);
return view('backend.row_items.index',compact('row_item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   return view('backend.row_items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      try{
$row_item= new Row_item();
$row_item->name=$request->name;
$row_item->description=$request->description;
if($row_item->save())
return redirect()->route('row_items.index')->with('success','Successfully saved');
else
return redirect()->back()->withInput()->with('error','Please try again');

}catch(Exception $e){

return redirect()->back()->withInput()->with('error','Please try again');
}
    }

    /**
     * Display the specified resource.
     */
    public function show(Row_item $row_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        {

$row_item=Row_item::findOrFail(encryptor('decrypt',$id));
return view('backend.row_items.edit',compact('row_item'));
}
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
      try{

$row_item=Row_item::findOrFail(encryptor('decrypt',$id));
$row_item->name=$request->name;
$row_item->description=$request->description;
if($row_item->save())
return redirect()->route('row_items.index')->with('success','Successfully saved');
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
       $row_item=Row_item::findOrFail(encryptor('decrypt',$id));
if($row_item->delete()){
Toastr::warning('Deleted Permanently!');
return redirect()->back();

}
    }
}
