<?php

namespace App\Http\Controllers;
use App\cat;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function adminloging(){
        $cart = cat::all();
        return view('admin', ['cart'=> $cart]);

    }
}
