<?php

namespace App\Http\Controllers;
use App\cat;
use Illuminate\Http\Request;

class homepage extends Controller
{
    public function home(){
      $cart = cat::all();
      return view('home1', ['cart'=> $cart]);
    }


    public function subcat(){
      $subcart = sub_cat::all();
      return view('sub_catigory', ['sub_cart'=> $subcart]);
    }
}
