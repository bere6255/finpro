<?php

namespace App\Http\Controllers;
use\App\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class product_handiler extends Controller
{
    public function getproduct_details(Request $request){
        $product_id = $request->get('product_id');
        $getproduct = DB::table('products')->where('id', '=', $product_id)->get();


    }
}
