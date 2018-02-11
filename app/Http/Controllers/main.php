<?php

namespace App\Http\Controllers;
use\App\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class main extends Controller
{
  public function loadcontent(Request $request){
      $products = $request->get('service');
      if (empty($products)) {
        $mainproduct = products::inRandomOrder()->get();
      }else {
      $mainproduct = DB::table('products')->where('sub_cat', '=', $products)->get();
      }

      return view('main', ['producting_main'=> $mainproduct]);

  }
}
