<?php

namespace DaraWorks\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use DaraWorks\account;
use DaraWorks\cat;
use DaraWorks\products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $product = products::inRandomOrder()->limit(4)->get();
      $cart = cat::all();
      return view('home', ['cart'=> $cart, 'produc'=>$product]);
    }
    public function loadcontent(Request $request){
        $cookie_value = $request->cookie('product');
        if (!empty($cookie_value)) {
          $getproduct = DB::table('products')->where('id', '=', $cookie_value)->get();
            $getcomment = DB::table('comments')->where('product_id', '=', $cookie_value)->get();
          if (!empty($getproduct{0}->id)) {
            $getseller = DB::table('users')->where('id', '=', $getproduct[0]->user_id)->get();
              $get_add_on = DB::select('select * from add__ons where product_key = ?', [$getproduct[0]->add_on]);
            $cart = cat::all();
              return view('product_details', ['product'=> $getproduct, 'seller'=> $getseller, 'cart'=> $cart, 'comments'=> $getcomment, 'adddd'=> $get_add_on]);
            }
        }else {
          $products = $request->get('service');
          $maimsub = $request->get('prosubcat');
          if (!empty($maimsub)) {
            $products=$maimsub;
          }
          if (empty($products)) {
            $mainproduct = products::inRandomOrder()->get();
          }else {
          $mainproduct = DB::table('products')->where('sub_cat', '=', $products)->get();
          }
          $cart = cat::all();
          return view('main', ['producting_main'=> $mainproduct, 'cart'=> $cart]);
        }


    }
     public function view_sells(Request $request){
       $order_id = $request->get('order');
       $order = DB::table('orders')->where('order_id', '=', $order_id)->get();
       $buyer = DB::table('users')->where('id', '=', $order[0]->bayers_id)->get();
       $product = DB::table('products')->where('id', '=', $order[0]->product_id)->get();
       $product_add= DB::table('add__ons')->where('product_key', '=', $product[0]->add_on)->get();
       $add_1= array();$add_2= array();$add_3= array();$add_4= array();$add_5= array();

       if ($order[0]->add_1>0) {
         $add_1=$product_add[0];
       }
       if ($order[0]->add_2>0) {
         $add_2=$product_add[1];
       }
       if ($order[0]->add_3>0) {
         $add_3=$product_add[2];
       }
       if ($order[0]->add_4>0) {
         $add_4=$product_add[3];
       }
       if ($order[0]->add_5>0) {
         $add_5=$product_add[4];
       }
       return view('order_details',['buyer_details'=>$buyer, 'product'=>$product, 'add_1'=>$add_1, 'add_2'=>$add_2, 'add_3'=>$add_3, 'add_4'=>$add_4,'add_5'=>$add_5]);
     }

    public function loadprofile(){
    if (auth::guest()) {
        return view('log');
    }
      $user=auth::user();
    $this->create_account($user['id']);

    $users_account = DB::table('accounts')->where('users_id', '=', $user['id'])->get();
    $gits = DB::table('products')->where('user_id', '=', $user['id'])->offset(0)->limit(10)->latest()->get();
    $order_hystry = DB::table('orders')->where('bayers_id', '=', $user['id'])->offset(0)->limit(10)->latest()->get();
    $sells = DB::table('sells')->where('users_id', '=', $user['id'])->offset(0)->limit(10)->latest()->get();
    $tran_hystry = DB::table('account_hystories')->where('users_id', '=', $user['id'])->offset(0)->limit(10)->latest()->get();
      $cart = cat::all();
      return view('profile',['cart'=> $cart, 'oder_hys'=>$order_hystry, 'account'=>$users_account, 'mygits'=>$gits, 'trans_hys'=>$tran_hystry, 'sells'=>$sells]);
    }

    private function create_account($user){

      $users_account = DB::table('accounts')->where('users_id', '=', $user)->get();

      if (empty($users_account[0]->users_id)) {
        $sellers_acc = new account;
        $sellers_acc->users_id =Auth::user()->id;
        $sellers_acc->balance =0;
        $sellers_acc->last_tran =0;
        $sellers_acc->for_tran ="No transaction yet";
        $sellers_acc->save();
      }
    }
}
