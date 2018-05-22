<?php

namespace DaraWorks\Http\Controllers;

use Illuminate\Http\Request;
use DaraWorks\cat;
use Mail;
use Auth;
use DaraWorks\User;
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
  public function activete_account(){

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

       $validate_mail =bcrypt($request->input('email'));
       $ac_mail = $request->input('email');
       //creating the user
         //$user = User::create($request, ['reg_usrname', 'reg_mail', 'reg_psw'] );
       $user=new User;
       $user->fullname = $request->input('reg_usrname');
       $user->email = $request->input('email');
       $user->password =  bcrypt($request->input('passwordreg'));
       $user->status = "bayer";
       $user->level = 0;
       $user->img_url = "defaut_priflepicture.jpg";
       $user->activation = $validate_mail;
       $user->save();
       $val_mail = array(
         'reg_mail' => $request->input('email'),
         'validate_mail' => $validate_mail, );
         Mail::send('mail.validate', $val_mail, function ($message) use ($ac_mail)
          {
            $message->from('info@daraworks.com', 'DaraWorks.LTD');
            $message->sender('info@DaraWorks.com', 'DaraWorks.LTD');
            $message->to($ac_mail, $name = null);
            $message->replyTo('no-reply@daraworks.com', 'DaraWorks.LTD');
            $message->subject('Activate your acount to continue order');

          });
         // autor sign
         auth()->login($user);

         //redirect to dashboard

    }

}
