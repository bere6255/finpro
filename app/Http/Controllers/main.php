<?php

namespace App\Http\Controllers;
use\App\products;
use App\cat;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class main extends Controller
{
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

  public function loadcontent(Request $request){
      $products = $request->get('service');
      $maimsub = $request->get('prosubcat');
      if (!empty($maimsub)) {
        $products=$maimsub;
      }
      if (empty($products)) {
        $mainproduct = products::inRandomOrder()->get();
      }else {
      $mainproduct = DB::table('products')->where('sub_cat', '=', $products)->get();
      }
      $cart = cat::all();
      return view('main', ['producting_main'=> $mainproduct, 'cart'=> $cart]);

  }
}
