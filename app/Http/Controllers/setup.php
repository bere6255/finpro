<?php

namespace App\Http\Controllers;
use App\cat;
use Illuminate\Http\Request;

class setup extends Controller
{
    public function testing(){
      $cart = cat::all();
      return view('home', ['cart'=> $cart]);
    }
}
