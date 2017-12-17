<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\cat;
class cat_control extends Controller
{
    public function create_cat(request $request){
      $name="cat_".md5("bereobong" . microtime()).".jpg";
      $catigory = $request->input('main_cat');
      $forminput=$request->except('img');
      if ($request->hasFile('img')) {
        $request->file('img');
        $request->img->storeAs('public',$name);

      }

      $cats= new cat;
      $cats->Cart = $catigory;
      $cats->image_url=$name;
      $cats->save();

      return back()->with('info','catigory added socessfully');

    }


    public function catigory(){
      $cart = cat::all();
      return view('catigory', ['cart'=> $cart],);
    }


}
