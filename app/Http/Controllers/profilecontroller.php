<?php

namespace App\Http\Controllers;
use App\cat;
use Illuminate\Http\Request;

class profilecontroller extends Controller
{
  public function loadprofile(){
    $cart = cat::all();
    return view('sellers',['cart'=> $cart]);
  }
}
