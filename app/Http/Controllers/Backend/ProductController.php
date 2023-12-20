<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product=Product::paginate(10);
        return view('backend.products.index',compact('product'));
    }
    /**
     * Show the form for creating a new resource.
     * 
     * 
     * 

     */
    public function frontIndex()
    {
        $product = Product::paginate(10);
        return view('frontend.shop', compact('product'));
    }
 
    public function create()
    {
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $product= new Product();
            $product->name=$request->name;
            $product->price=$request->price;
            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/products'), $imageName);
                $product->image=$imageName;
            }
            if($product->save())
            return redirect()->route('products.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
            
         }catch(Exception $e){
    
            return redirect()->back()->withInput()->with('error','Please try again');
         }
    
    }




    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
     
        $product=Product::findOrFail(encryptor('decrypt',$id));
        return view('backend.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        try{
            $product=Product::findOrFail(encryptor('decrypt',$id));
            $product->name=$request->name;
            $product->price=$request->price;
    
            
            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/products'), $imageName);
                $product->image=$imageName;
            }
            
            if($product->save())
                return redirect()->route('products.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
            
        }catch(Exception $e){
           
            return redirect()->back()->withInput()->with('error','Please try again');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product=Product::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/products/').$product->image;
        
        if($product->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
