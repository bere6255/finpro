<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use\App\products;
use\App\account;
use Auth;
use App\cat;
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
      DB::table('users')->where('id', Auth::user()->id)->update(['status' => "seller", 'level' => 1]);
      $sellers_acc = new account;
      $sellers_acc->users_id =Auth::user()->id;
      $sellers_acc->balance =0;
      $sellers_acc->last_tran =0;
      $sellers_acc->for_tran ="No transaction yet";
      $sellers_acc->save();
      return redirect('seller');
    }

}
