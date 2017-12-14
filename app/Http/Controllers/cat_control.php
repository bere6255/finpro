<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cat;
class cat_control extends Controller
{
    public function create_cat(Request $request){
      $forminput=$loaded->except('image');

      $this->Validate($request, [
        'main_cat'=> 'required'
      ]);

      $this->Validate($forminput, [
        'image'=> 'image|mimes:png,jpg,jpng|max:10000'
      ]);
      //handil image upload
      $image=$request->image;
      if($image){
        $imagename=$image->getClientoriginalName();
        $image->move('images',$imagename);
        //pass image name to forminput
        $forminput['image']=$imagename;
      }
      $cats = cat::create($forminput->all());

/*
      $cat = new cat();
      $cat->Cart = $request->input('main_cat');
      $cat->save();
*/
      return back()->with('info','catigory added socessfully');
    }


    public function catigory(){
      $cart = cat::all();
      return view('catigory', ['cart'=> $cart]);
    }

}
