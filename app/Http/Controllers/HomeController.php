<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\cat;
use App\products;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $product = products::inRandomOrder()->get();
      $cart = cat::all();
      return view('home', ['cart'=> $cart, 'produc'=>$product]);
    }
    public function loadcontent(Request $request){
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
    public function loadprofile(){
      $cart = cat::all();
      return view('sellers',['cart'=> $cart]);
    }
}
