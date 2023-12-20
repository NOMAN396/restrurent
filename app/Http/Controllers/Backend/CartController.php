<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller

{
    public function index(){
        $product=Product::all();
        return view('frontend.shop',compact('product'));
    }

    public function cart(){
        return view('frontend.cart');
    }

    public function addToCart($id){


        $product=Product::findOrFail($id);

        $cart = session()->get('cart', []);

        session()->put('cart', $cart);
        $this->cart_total();
        $message="Product added to cart successfully!";
        return redirect()->back()->with('success', $message);


    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            $this->cart_total();
            session()->flash('success', 'Product removed successfully');
        }
    }


    public function cart_total(){
        $total=0;
        if(session('cart')){
            foreach (session('cart')as $id=>$details){
                $total += $details['price'] * $details['quantity'];
            }
        }

        if(isset(session('cart_details')['coupon_code'])){
            $cart_total=$total;
            $discount=($cart_total*(session('cart_details')['discount']/100));
            $tax=(($cart_total-$discount)*0.15);
            $total_amount=(($cart_total+$tax)-$discount);
            $coupondata=array(
                'cart_total'=>session('cart_details')['coupon_code'],
                'discount'=>session('cart_details')['discount'],
                'discount_amount'=>$discount,
                'tax'=>$tax,
                'total_amount'=>$total_amount
            );

            session()->put('cart_details', $coupondata);
        }else{
            $cart_data=array('cart_total'=>$total,'tax'=>($total*0.15),'total_amount'=>($total + ($total*0.15)));
            session()->put('cart_details', $cart_data);
        }
        }


        public function coupon_check(Request $request){
            $coupon = Coupon::where('code',$request->coupon)
                            ->pluck('discount')->toArray();



                            if(!empty($coupon)){
                                $cart_total=session('cart_details')['cart_total'];
                                $discount=($cart_total*($coupon[0]/100));
                                $tax=(($cart_total-$discount)*0.15);
                                $total_amount=(($cart_total+$tax)-$discount);
                                $coupondata=array(
                                    'cart_total'=>$cart_total,
                                    'coupon_code'=>$request->coupon,
                                    'discount'=>$coupon[0],
                                    'discount_amount'=>$discount,
                                    'tax'=>$tax,
                                    'total_amount'=>$total_amount
                                );
                                session()->put('cart_details', $coupondata);
                            }
                            return redirect()->back()->with('success', 'Product added to cart successfully!');
                        }

    }

    

