<?php

namespace DaraWorks\Http\Controllers;
use Illuminate\Support\Facades\DB;
use\DaraWorks\products;
use\DaraWorks\account;
use\DaraWorks\comment;
use\DaraWorks\Add_On;
use\DaraWorks\Order;
use Auth;
use DaraWorks\cat;
use Illuminate\Http\Request;

class product_handiler extends Controller
{
    public function getproduct_details(Request $request){
        $product_id = $request->get('service');
        $getproduct = DB::table('products')->where('id', '=', $product_id)->get();
        if (!empty($getproduct{0}->id)) {
          $getseller = DB::table('users')->where('id', '=', $getproduct[0]->user_id)->get();
          $getcomment = DB::table('comments')->where('product_id', '=', $product_id)->get();
            $get_add_on = DB::select('select * from add__ons where product_key = ?', [$getproduct[0]->add_on]);

          $cart = cat::all();
        }else {
          return back();
        }

        return view('product_details', ['product'=> $getproduct, 'seller'=> $getseller, 'cart'=> $cart, 'comments'=> $getcomment, 'adddd'=> $get_add_on]);

    }

    public function createsaler(){
      DB::table('users')->where('id', Auth::user()->id)->update(['status' => "seller", 'level' => 1]);
      return redirect('seller');
    }

    public function order_product(Request $request){
      $product_id =$request->get('product_id');
      $seller_id = $request->get('product_seller');
      $total = $request->get('total');
      $add_1 = $request->input('add1');
      $add_2 = $request->input('add2');
      $add_3 = $request->input('add3');
      $add_4 = $request->input('add4');
      $add_5 = $request->input('add5');
      if ($add_1!=1) {
        $add_1=0;
      }
      if ($add_2!=2) {
        $add_2=0;
      }
      if ($add_3!=3) {
        $add_3=0;
      }
      if ($add_4!=4) {
        $add_4=0;
      }
      if ($add_5!=5) {
        $add_5=0;
      }
      if (Auth::guest()) {
        // remember order write to session product_id
          return redirect('/login')->Cookie('product', $product_id, 3);
      }

      if (Auth::user()->activation=="activated") {
              $bayer= Auth::user();
              $cart = cat::all();
              $prod_ordered = DB::table('products')->where('id', $product_id)->get();
              $order_id = $bayer->id+ rand(0,100000000);

              if ($prod_ordered[0]->user_id == $seller_id) {
                $order = new Order;
                $order->bayers_id = $bayer->id;
                $order->seller_id = $seller_id;
                $order->product_id = $product_id;
                $order->amount = $total;
                $order->status = "Processing";
                $order->order_id = $order_id;
                $order->add_1 = $add_1;
                $order->add_2 = $add_2;
                $order->add_3 = $add_3;
                $order->add_4 = $add_4;
                $order->add_5 = $add_5;
                $order->save();
                $order_table_id = $order_id;
                $order_details = array($bayer->email, $order_id, $total*100, 1,$order_table_id,$seller_id );
                $dis_details = array($bayer->email, $order_id, $total, $prod_ordered[0]->pro_name, );
                return view ('pay')->with('trans', $order_details)->with('cart', $cart)->with('display_detsils', $dis_details);
              }
      }

       return redirect ('/account_Acti')->Cookie('product', $product_id, 10);

    }



    public function order_sum(Request $request){

      $product_id = $request->get('product_id');
      $seller_id = $request->get('product_seller');
      if (Auth::guest()) {
        // remember order write to session product_id
          return redirect('/login')->Cookie('product', $product_id, 10);
      }
      $add_1 = $request->input('serv_add1');
      $add_2 = $request->input('serv_add2');
      $add_3 = $request->input('serv_add3');
      $add_4 = $request->input('serv_add4');
      $add_5 = $request->input('serv_add5');
      $getproduct = DB::table('products')->where('id', '=', $product_id)->get();
      $final_sum=$getproduct[0]->amount;
      if (!empty($getproduct{0}->id)) {
        $getseller = DB::table('users')->where('id', '=', $getproduct[0]->user_id)->get();
          $get_add_on = DB::select('select * from add__ons where product_key = ?', [$getproduct[0]->add_on]);

          $addon1=[];
          $addon2=[];
          $addon3=[];
          $addon4=[];
          $addon5=[];

          if (!empty($add_1)) {
            $addon1 = DB::table('add__ons')->where('id', '=', $add_1)->get();
            $final_sum +=$addon1[0]->Amount;

          }
          if (!empty($add_2)) {
            $addon2 = DB::table('add__ons')->where('id', '=', $add_2)->get();
            $final_sum +=$addon2[0]->Amount;
          }

          if (!empty($add_3)) {
            $addon3 = DB::table('add__ons')->where('id', '=', $add_3)->get();
            $final_sum +=$addon3[0]->Amount;
          }
          if (!empty($add_4)) {
            $addon4 = DB::table('add__ons')->where('id', '=', $add_4)->get();
            $final_sum +=$addon4[0]->Amount;
          }
          if (!empty($add_5)) {
            $addon5 = DB::table('add__ons')->where('id', '=', $add_5)->get();
            $final_sum +=$addon5[0]->Amount;
          }

        $cart = cat::all();
          return view('summary', ['cart'=> $cart, 'product'=> $getproduct, 'summary'=> $final_sum, 'seller'=> $getseller, 'add1'=> $addon1, 'add2'=> $addon2, 'add3'=> $addon3, 'add4'=> $addon4, 'add5'=> $addon5, 'activ'=>""]);
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
