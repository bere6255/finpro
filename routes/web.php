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
Route::get('/login', 'SessionsController@Create');
Route::get('/logout', 'SessionsController@logout');
Route::post('/login', 'SessionsController@Login');
Route::post('/register', 'RegisterController@Create');
Route::get('/register', 'RegisterController@load');
Route::get('/setup', 'setup@testing');
Route::post('/admin/catigory', 'cat_control@create_cat');
Route::post('/admin/subcatigory', 'cat_control@create_subcat');
Route::post('/admin/product', 'cat_control@create_product');
Route::get('/product', 'cat_control@getproduct');
Route::get('/', 'homepage@home')->name('home');
Route::get('/subcat', 'cat_control@subcat');
Route::get('/postsubcat', 'cat_control@post_subcat');
Route::get('/catigory', 'cat_control@catigory');
Route::get('/admin', 'admin@adminloging');
Route::get('/main', 'main@loadcontent');


Route::get('/bayers', function () {
    return view('bayers');
});
Route::get('/board', function () {
    return view('board');
});
Route::get('/sellers', function () {
    return view('sellers');
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'salea'], function () {
  Route::get('/login', 'SaleaAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'SaleaAuth\LoginController@login');
  Route::post('/logout', 'SaleaAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'SaleaAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'SaleaAuth\RegisterController@register');

  Route::post('/password/email', 'SaleaAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'SaleaAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'SaleaAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'SaleaAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'gen'], function () {
  Route::get('/login', 'GenAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'GenAuth\LoginController@login');
  Route::post('/logout', 'GenAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'GenAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'GenAuth\RegisterController@register');

  Route::post('/password/email', 'GenAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'GenAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'GenAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'GenAuth\ResetPasswordController@showResetForm');
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
