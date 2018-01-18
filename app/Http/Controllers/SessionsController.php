<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;

class SessionsController extends Controller
{
  public function Create(){
    return view('log');
  }
  public function Login(){
    if (!auth()->attempt(request(['email','password']))){
      return view('log')->withErrors('Users email or password incorrate');
      exit();
    }
    return back();
  }

  public function logout(){
    Auth::logout();
    return view('home');
  }
}
