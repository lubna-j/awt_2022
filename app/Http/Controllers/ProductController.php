<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}
