<?php

namespace App\Http\Controllers;
use App\cat;
use Illuminate\Http\Request;

class homepage extends Controller
{
    public function home(){
      $cart = cat::all();
      return view('home', ['cart'=> $cart]);
    }

}
