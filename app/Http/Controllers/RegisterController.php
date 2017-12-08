<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
    public function load(){
      return view('reg');
    }

    public function create(Request $request){
      // validate the forms
     $this->velidata($request);
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
       $user->save();
         // autor sign
         auth()->login($user);
         //redirect to dashboard
         return redirect()->home();
    }

}
