<?php

namespace App\Http\Controllers;
use App\cat;
use App\products;
use Illuminate\Http\Request;

class homepage extends Controller
{
    public function home(){
      $product = products::inRandomOrder()->get();
      $cart = cat::all();
      return view('home', ['cart'=> $cart, 'produc'=>$product]);
    }

}
