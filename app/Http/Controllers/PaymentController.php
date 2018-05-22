<?php

namespace DaraWorks\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DaraWorks\account_hystory;
use DaraWorks\sells;
use DaraWorks\cat;
use Auth;
use DaraWorks\Http\Requests;
use DaraWorks\Http\Controllers\Controller;
use Paystack;

class PaymentController extends Controller
{
  /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {

      $order_table_id = $request->get('order_table_id');
      $amount = $request->input('amount');
      $seller_id = $request->input('seller_id');
      $user=auth::user();
      $account_balance = DB::table('accounts')->where('users_id', '=', $user['id'])->get();

      if ($account_balance[0]->balance>0) {
        $order_amount = $amount/100;
        $balance= $account_balance[0]->balance-$order_amount;
        if ($balance>0) {
        DB::table('accounts')->where('users_id', $user['id'])->update(['balance' => $balance, 'last_tran' => $order_amount]);
          DB::table('orders')->where('id', $order_table_id)->update(['status' => "successful"]);
        $ac_hys = new account_hystory;
        $ac_hys->users_id = $user['id'];
        $ac_hys->name = $order_table_id;
        $ac_hys->status = "successful";
        $ac_hys->amount = $order_amount;
        $ac_hys->save();
        $sells = new sells;
        $sells->users_id = $seller_id;
        $sells->bayers_id = $user['id'];
        $sells->amount = $order_amount;
        $sells->status = "processing";
        $sells->order_id = $order_table_id;
        $sells->save();
        $sellers_balance = DB::table('accounts')->where('users_id', '=', $seller_id)->get();
        $potencial_balance = $order_amount+$sellers_balance[0]->pot_balance;

        DB::table('accounts')->where('users_id', $seller_id)->update(['pot_balance' => $potencial_balance, 'last_tran' => $order_amount]);
        $details = array('order_id' =>$order_table_id ,'amount'=> $order_amount,);
      //  DB::table('account_hystories')->where('users_id', $user['id'])->update(['balance' => $balance, 'last_tran' => $amount]);
      // create a class to send E-mail to boot bayyer and seller with transaction details and recipt
      ////////////send E-mail//////////
    /*  $trans_recipt = array(
        'bayers_mail' => $user['email'],
        'validate_mail' => $validate_mail, );
        Mail::send('mail.validate', $val_mail, function ($message) use ($ac_mail)
         {
           $message->from('info@daraworks.com', 'DaraWorks.LTD');
           $message->sender('info@DaraWorks.com', 'DaraWorks.LTD');
           $message->to($ac_mail, $name = null);
           $message->replyTo('no-reply@daraworks.com', 'DaraWorks.LTD');
           $message->subject('Activate your acount to continue order');

         });

         $order_notify = array(
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
            */
            $cart = cat::all();
      return view('payment_successful',['cart'=> $cart, 'success'=>$details]);
        }else {
            return Paystack::getAuthorizationUrl()->redirectNow();
        }
      }

    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
