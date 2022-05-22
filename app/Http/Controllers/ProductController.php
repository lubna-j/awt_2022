<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
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

        $cart = new Cart;
        $cart->user_id =  Auth::user()->id;
        $cart->product_id = $request->product_id;
        $cart->save();

        return redirect()->back();

    }

    static function cartItem()
    {
        $user_id = Auth::user()->id;
        return Cart::where('user_id',$user_id)->count();
    }

    public function cartList(Request $request)
    {
        $user_id = Auth::user()->id;
        $data = Cart::where('user_id',$user_id)->get();
        return view('cartList',['products'=>$data]);
    }
}
