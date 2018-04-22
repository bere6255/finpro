<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cat;
use Auth;
use App\User;
class RegisterController extends Controller
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
  public function login_main(){
    if (!auth()->attempt(request(['email','password']))){
      return view('log')->withErrors('Users email or password incorrate');
      exit();
    }
     return redirect('/main');
  }

  public function activate_account(){
      $cart = cat::all();
      $messag = "please check your supplied E-mail to activate your account";
      $messag2 = " After 15m you will have to start your Order over again thanks";
    return view ('account_Acti', ['cart'=> $cart, 'activ'=>$messag, 'activ2'=>$messag2]);


  }

  public function loadupdate(){
    if (Auth::guest()) {
        return redirect('/');
    }
    $cart = cat::all();
    return view('updateprofile', ['cart'=> $cart]);
  }
  public function updateuser(){
    if (Auth::guest()) {
        return redirect('/');
    }
  }

  public function logout(){
    Auth::logout();
    return redirect('/');
  }

    public function load(){
      if (!Auth::guest()) {
          return redirect('/');
      }
      return view('reg');
    }

    public function register(Request $request){
      if (!Auth::guest()) {
          return redirect('/');
      }
     $this->velidata($request);
     return redirect('/main');
    }

    private function velidata( $request){
      $this->Validate($request, [
         'reg_usrname'=> 'required',
         'email'=> 'required|unique:users',
         'passwordreg'=>'required|confirmed'
       ]);
       //creating the user
         //$user = User::create($request, ['reg_usrname', 'reg_mail', 'reg_psw'] );
       $user=new User;
       $user->fullname = $request->input('reg_usrname');
       $user->email = $request->input('email');
       $user->password =  bcrypt($request->input('passwordreg'));
       $user->status = "bayer";
       $user->level = 0;
       $user->img_url = "defaut_priflepicture.jpg";
       $user->save();

         // autor sign
         auth()->login($user);

         //redirect to dashboard

    }

}
