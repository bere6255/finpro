<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cat;
class cat_control extends Controller
{
    public function create_cat(Request $request){
      $forminput=$loaded->except('image');
      $this->Validate($forminput, [
        'main_cat'=> 'required'
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
}
