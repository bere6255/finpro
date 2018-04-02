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
        if (!empty($getproduct{0}->id)) {
          $getseller = DB::table('users')->where('id', '=', $getproduct[0]->user_id)->get();
          $cart = cat::all();
        }else {
          return back();
        }

        return view('product_details', ['product'=> $getproduct, 'seller'=> $getseller, 'cart'=> $cart]);

    }

    public function createsaler(){
      DB::table('users')->where('id', Auth::user()->id)->update(['status' => "seller", 'level' => 1]);
      return redirect('seller');
    }

    public function order_product(Request $request){
      $product_id =$request->get('product_id');
      $seller_id = $request->get('$product_seller');
      if (Auth::guest()) {
        // remember order write to session product_id

          return redirect('/login')->Cookie('product', $product_id, 60);
      }
      $bayer= Auth::user();
      return $bayer;


    }
    public function comment_post(Request $request){
    /*  $this->Validate($request, [
         'reg_usrname'=> 'required',
         'email'=> 'required|unique:users',
         'passwordreg'=>'required|confirmed'
       ]);
       //creating the user
         //$user = User::create($request, ['reg_usrname', 'reg_mail', 'reg_psw'] );
       $user=new User;
       $user->fullname = $request->input('reg_usrname');
       $user->email = $request->input('email');
       */
       return $request;
    }
}
