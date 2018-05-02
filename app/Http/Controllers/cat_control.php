<?php

namespace DaraWorks\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use DaraWorks\cat;
use DateTime;
use Auth;
use DaraWorks\subcat;
use DaraWorks\Add_On;
use DaraWorks\products;
class cat_control extends Controller
{


  public function postsub(Request $request){
    $catigory = $request->get('catigory');
    $subcart = DB::table('subcats')->where('cat', '=', $catigory)->get();
    echo "<select id='prosubcat_post' name='prosubcat_post' class='form-control' >";

  foreach ($subcart->all() as $sub) {
    echo "<option value='$sub->id'>"; echo $sub->sub_cat; echo "</option>";
  //echo '<option"';echo 'value="' echo '$sub->sub_cat';  echo'">'; echo $sub->sub_cat;  echo "</option>";
  }
    echo "</select>";
    //return ['sub_cat'=> $subcart];
  }

  public function post_subcat(Request $request){
    $catigory = $request->get('catigory');
    $subcart = DB::table('subcats')->where('cat', '=', $catigory)->get();
    echo "<select id='prosubcat' name='prosubcat' class='form-control' >";

  foreach ($subcart->all() as $sub) {
    echo "<option value='$sub->id'>"; echo $sub->sub_cat; echo "</option>";
  //echo '<option"';echo 'value="' echo '$sub->sub_cat';  echo'">'; echo $sub->sub_cat;  echo "</option>";
  }
    echo "</select>";
    //return ['sub_cat'=> $subcart];
  }


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
      $this->Validate($request, [
         'product_name'=> 'required',
         'procat_post'=> 'required',
         'prosubcat_post'=>'required',
         'discrib'=>'required',
         'amount'=>'required'
       ]);
       $now = new DateTime();
       $add_on_key = microtime().rand(0,100000000);
      $name="Prodoct_".md5("bereobong" . microtime()).".jpg";
      $prod_name = $request->input('product_name');
      $catigory = $request->input('procat_post');
      $subcatigory = $request->input('prosubcat_post');
      $discription = $request->input('discrib');
      $amount = $request->input('amount');
      $add1_name = $request->input('add_1_name');
      $add1_amount = $request->input('add_1_amount');
      $add1_discrib = $request->input('add_1_discrib');
      $add2_name = $request->input('add_2_name');
      $add2_amount = $request->input('add_2_amount');
      $add2_discrib = $request->input('add_2_discrib');
      $add3_name = $request->input('add_3_name');
      $add3_amount = $request->input('add_3_amount');
      $add3_discrib = $request->input('add_3_discrib');
      $add4_name = $request->input('add_4_name');
      $add4_amount = $request->input('add_4_amount');
      $add4_discrib = $request->input('add_4_discrib');
      $add5_name = $request->input('add_5_name');
      $add5_amount = $request->input('add_5_amount');
      $add5_discrib = $request->input('add_5_discrib');

      if ($request->hasFile('pro_img')) {
        $request->file('pro_img');
        $request->pro_img->storeAs('public',$name);

      }

      $products= new products;
      $products->pro_name = $prod_name;
      $products->description = $discription;
      $products->amount = $amount;
      $products->image_url=$name;
      $products->user_id = Auth::user()->id;
      $products->cat = $catigory;
      $products->sub_cat = $subcatigory;
      $products->add_on = $add_on_key;
      $products->save();

      if (!empty($add1_name)) {
      DB::table('add__ons')->insert([
    ['product_key' => $add_on_key, 'name' => $add1_name, 'Amount' => $add1_amount, 'discribtion' => $add1_discrib,'number' => 1, 'created_at' => $now, 'updated_at' => $now]
]);
      }

      if (!empty($add2_name)) {
        DB::table('add__ons')->insert([
      ['product_key' => $add_on_key, 'name' => $add2_name, 'Amount' => $add2_amount, 'discribtion' => $add2_discrib,'number' => 2, 'created_at' => $now, 'updated_at' => $now]
  ]);
      }

      if (!empty($add3_name)) {
        DB::table('add__ons')->insert([
      ['product_key' => $add_on_key, 'name' => $add3_name, 'Amount' => $add3_amount, 'discribtion' => $add3_discrib,'number' => 3, 'created_at' => $now, 'updated_at' => $now]
  ]);
      }
      if (!empty($add4_name)) {
        DB::table('add__ons')->insert([
      ['product_key' => $add_on_key, 'name' => $add4_name, 'Amount' => $add4_amount, 'discribtion' => $add4_discrib, 'number' => 4, 'created_at' => $now, 'updated_at' => $now]
  ]);
      }
      if (!empty($add5_name)) {

        DB::table('add__ons')->insert([
      ['product_key' => $add_on_key, 'name' => $add5_name, 'Amount' => $add5_amount, 'discribtion' => $add5_discrib,'number' => 5, 'created_at' => $now, 'updated_at' => $now]
  ]);
      }


      return back()->with('product_info','product added socessfully');

    }



    public function catigory(){
      $cart = cat::all();
      return view('catigory', ['cart'=> $cart]);
    }

    public function subcat(Request $request){
      $catigory = $request->get('catigory');
      if (empty($catigory)) {
        $cart = cat::all();
        return view('catigory', ['cart'=> $cart]);
      }else {
      $subcart = DB::table('subcats')->where('cat', '=', $catigory)->get();
      return view('sub_catigory', ['sub_cat'=> $subcart]);
      }
    }

    public function getproduct(Request $request){
      $catigory = $request->get('catigory');
      $subcat = $request->get('subcat');
      $products = DB::table('products')->where('cat', '=', $catigory)->get();
      return view('main', ['product'=> $subcart]);
    }

    public function editepost(){
      return "welcome in edite post";
    }

    public function delitepost(){
      return "welcome in delite post";
    }


}
