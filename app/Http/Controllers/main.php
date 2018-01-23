<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
  public function loadcontent(Request $request){
      //$cart = cat::all();
      return view('main');

  }
}
