<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\cat;
class accountting extends Controller
{
  public function load_seller(){
    $cart = cat::all();
    return view('sellers', ['cart'=> $cart,]);
  }
  public function load_bayer(){
  //  return view('seller');
  }
}
