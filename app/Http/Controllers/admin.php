<?php

namespace App\Http\Controllers;
use App\cat;
use App\subcat;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function adminloging(){
        $cart = cat::all();
        $subcat = subcat::all();
        return view('admin', ['cart'=> $cart, 'subcat'=>$subcat]);

    }
}
