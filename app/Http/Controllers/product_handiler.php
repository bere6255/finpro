<?php

namespace App\Http\Controllers;
use\App\products;
use App\cat;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class product_handiler extends Controller
{
    public function getproduct_details(Request $request){
        $product_id = $request->get('service');
        $getproduct = DB::table('products')->where('id', '=', $product_id)->get();
        $cart = cat::all();
        return view('product_details', ['product'=> $getproduct, 'cart'=> $cart]);

    }

    public function createsaler(){
      return "am here now you can continue";
    }

}
