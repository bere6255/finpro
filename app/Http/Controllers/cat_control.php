<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cat;
class cat_control extends Controller
{
    public function create_cat(Request $request){
      $this->Validate($request, [
        'main_cat'=> 'required'
      ]);

      //$cats = cat::create($request->all());


      $cat = new cat();
      $cat->Cart = $request->input('main_cat');
      $cat->save();
      return back()->with('info','catigory added socessfully');
    }
}
