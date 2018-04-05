<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use\App\products;
use\App\account;
use\App\comment;
use\App\Order;
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
          $getcomment = DB::table('comments')->where('product_id', '=', $product_id)->get();
          $cart = cat::all();
        }else {
          return back();
        }

        return view('product_details', ['product'=> $getproduct, 'seller'=> $getseller, 'cart'=> $cart, 'comments'=> $getcomment]);

    }

    public function createsaler(){
      DB::table('users')->where('id', Auth::user()->id)->update(['status' => "seller", 'level' => 1]);
      return redirect('seller');
    }

    public function order_product(Request $request){
      $product_id =$request->get('product_id');
      $seller_id = $request->get('product_seller');
      if (Auth::guest()) {
        // remember order write to session product_id
          return redirect('/login')->Cookie('product', $product_id, 10);
      }

      $bayer= Auth::user();
      $cart = cat::all();
      $prod_ordered = DB::table('products')->where('id', $product_id)->get();
      $order_id = $bayer->id+ rand(0,100000000);

      if ($prod_ordered[0]->user_id == $seller_id) {
        $order = new Order;
        $order->bayers_id = $bayer->id;
        $order->seller_id = $seller_id;
        $order->product_id = $product_id;
        $order->amount = $prod_ordered[0]->amount;
        $order->status = "Processing";
        $order->order_id = $order_id;
        $order->save();

        $order_detsils = array($bayer->email, $order_id, $prod_ordered[0]->amount*100, 1, );
        $dis_detsils = array($bayer->email, $order_id, $prod_ordered[0]->amount, $prod_ordered[0]->pro_name, );
        return view ('pay')->with('trans', $order_detsils)->with('cart', $cart)->with('display_detsils', $dis_detsils);
      }
       return back();

    }
    public function comment_post(Request $request){
      $this->Validate($request, [
         'product'=> 'required',
         'comment'=> 'required',

       ]);
        $me=Auth::user();

         $comm = new comment;
         $comm->commenter_id = $me->id;
         $comm->product_id = $request->input('product');
         $comm->comment = $request->input('comment');
         $comm->commenters_name = $me->fullname;
         $comm->commenters_img_url = $me->img_url;
         $comm->save();
       return back();
    }


}
