<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\cat;
use App\subcat;
class cat_control extends Controller
{
    public function create_cat(request $request){
      $this->Validate($request, [
         'main_cat'=> 'required'
       ]);
       $name="cat_".md5("bereobong" . microtime()).".jpg";
       $catigory = $request->input('main_cat');
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

    public function create_subcat(request $request){
      $name="subcat_".md5("bereobong" . microtime()).".jpg";
      $catigory = $request->input('cat');
      $subcatigory = $request->input('sub_cat');
      if ($request->hasFile('sub_img')) {
        $request->file('sub_img');
        $request->sub_img->storeAs('public',$name);

      }

      $subcats= new subcat;
      $subcats->cat = $catigory;
      $subcats->sub_cat = $subcatigory;
      $subcats->image_url=$name;
      $subcats->save();

      return back()->with('subcat_info','catigory added socessfully');

    }


    public function create_product(request $request){
      $name="Prodoct_".md5("bereobong" . microtime()).".jpg";
      $catigory = $request->input('cat');
      $subcatigory = $request->input('sub_cat');
      if ($request->hasFile('sub_img')) {
        $request->file('sub_img');
        $request->sub_img->storeAs('public',$name);

      }

      $subcats= new subcat;
      $subcats->cat = $catigory;
      $subcats->sub_cat = $subcatigory;
      $subcats->image_url=$name;
      $subcats->save();

      return back()->with('subcat_info','catigory added socessfully');

    }

// using numail sql query
// $user = DB::select('select * from user where active =?',[1]);
//Storage::url($cart->image_url)
//$file = $event->attachments->where('path', $attachmentPath)->first();
    public function catigory(){
      $cart = cat::all();
      return view('catigory', ['cart'=> $cart]);
    }

    public function subcat(Request $request){
      $catigory = $request->get('catigory');
      $subcart = DB::table('subcats')->where('cat', '=', $catigory)->get();
      return view('sub_catigory', ['sub_cat'=> $subcart]);
    }


}
