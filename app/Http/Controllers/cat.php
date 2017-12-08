<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cat extends Controller
{
    public function create_cat(Request $reques){
      $this->Validate($request, {
        'main_cat'=> 'required|unique:cats'
      });

      $cats = new cats;
      $cats->Cart = $request->input('main_cat');
      $cats->save();
    }
}
