<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageuloader extends Controller
{

    private function load($loaded){
      $forminput=$loaded->except('image');
      //handil image upload
      $image=$loaded->image;
      if($image){
        $imagename=$image->getClientoriginalName();
        $image->move('images',$imagename);
        //pass image name to forminput
        $forminput['image']=$imagename;
        return $forminput;
      }


    }
}
