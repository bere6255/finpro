<?php
use Illuminate\Support\Facades\Storage;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', 'RegisterController@Create');
Route::get('/logout', 'RegisterController@logout');
Route::post('/login', 'RegisterController@Login');
Route::post('/login_main', 'RegisterController@login_main');
Route::post('/register', 'RegisterController@register');
Route::get('/register', 'RegisterController@load');
Route::get('/ac_val', 'RegisterController@activete_account');
Route::get('//account_Acti', 'RegisterController@activate_account');
Route::get('/update', 'RegisterController@loadupdate');
Route::post('/update_pro', 'RegisterController@updateuser');
Route::get('/setup', 'setup@testing');
Route::post('/admin/catigory', 'cat_control@create_cat');
Route::post('/admin/subcatigory', 'cat_control@create_subcat');
Route::post('/admin/product', 'cat_control@create_product');
Route::get('/user/edite_post', 'cat_control@editepost');
Route::get('/user/delite_post', 'cat_control@delitepost');
Route::get('/product', 'cat_control@getproduct');
Route::get('/productdetails', 'product_handiler@getproduct_details');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/subcat', 'cat_control@subcat');
Route::get('/postsubcat', 'cat_control@post_subcat');
Route::get('/postsub', 'cat_control@postsub');
Route::get('/catigory', 'cat_control@catigory');
Route::get('/main', 'HomeController@loadcontent');
Route::get('/sales_preview', 'HomeController@view_sells');
Route::get('/order_hystry', 'HomeController@order_hys');
Route::get('/transection_hystry', 'HomeController@transact_hys');
Route::get('/gits', 'HomeController@gits');
Route::get('/sells', 'HomeController@sells');
Route::get('/becomeasaller', 'product_handiler@createsaler');
Route::get('/profile', 'HomeController@loadprofile')->name('profile');
Route::get('/becomeasaller', 'product_handiler@createsaler');
Route::get('/dashboard', 'HomeController@loadprofile');
Route::post('/order','product_handiler@order_product');
Route::get('/comment_com','product_handiler@comment_post');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::post('/chieckout', 'product_handiler@order_sum')->name('sum');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');
});
Route::group(['prefix' => 'baod'], function () {
  Route::get('/login', 'BaodAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'BaodAuth\LoginController@login');
  Route::post('/logout', 'BaodAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'BaodAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'BaodAuth\RegisterController@register');

  Route::post('/password/email', 'BaodAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'BaodAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'BaodAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'BaodAuth\ResetPasswordController@showResetForm');
});
