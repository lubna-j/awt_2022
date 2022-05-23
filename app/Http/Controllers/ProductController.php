<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;

class ProductController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    public function details($id)
    {
        $data = Product::find($id);
        return view('product_details',['product'=>$data]);
    }

    public function search(Request $request)
    {
        $data = Product::where('name','like','%'.$request->input("query").'%')->get();
        return view('search',['products'=>$data]);
    }

    public function add_to_cart(Request $request)
    {
        if(Auth::user())
        {
            $cart = new Cart;
            $cart->user_id =  Auth::user()->id;
            $cart->product_id = $request->product_id;
            $cart->save();

            return redirect()->back();
        }
      

    }

    static function cartItem()
    {
        if(Auth::user())
        {
            $user_id = Auth::user()->id;
            return Cart::where('user_id',$user_id)->count();
        }
       
    }

    public function cartList(Request $request)
    {
        if(Auth::user())
        {
             $user_id = Auth::user()->id;
            $data = Cart::where('user_id',$user_id)->get();
            return view('cartList',['products'=>$data]);
        }
       
    }

    public function removecart($id)
    {

        Cart::destroy($id);
        return redirect('cartList');
    }

     public function orderNow()
    {
        if(Auth::user())
        {
            $user_id = Auth::user()->id;
            $product_ids = Cart::where('user_id',$user_id)->pluck('product_id');
            $total_price = Product::whereIn('id',$product_ids)->sum('price');
       
            return view('order_now',['total_price'=>$total_price]);
        }
       
    }

    public function orderPlace(Request $request)
    {
        if(Auth::user())
        {
            $user_id = Auth::user()->id;
            $allCart = Cart::where('user_id',$user_id)->get();
            foreach($allCart as $cart)
            {
                $order = new Order;
                $order->user_id = $user_id;
                $order->product_id = $cart['product_id'];
                $order->status = "pending";
                $order->payment_method = $request->payment;
                $order->payment_status = "pending";
                $order->address = $request->address;
                $order->save();
                Cart::where('user_id',$user_id)->delete();

            }
        }
        return redirect('/');
    }
}
