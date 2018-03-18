<?php

namespace App\Http\Controllers;
use\App\products;
use Auth;
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
      DB::table('users')->where('users_id', Auth::user()->id)->update(['status' => "seller", 'level' => 1]);
      return redirect('seller');
    }

}
