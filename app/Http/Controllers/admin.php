<?php

namespace DaraWorks\Http\Controllers;
use DaraWorks\cat;
use DaraWorks\subcat;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function adminloging(){
        $cart = cat::all();
        return view('admin', ['cart'=> $cart,]);

    }
}
