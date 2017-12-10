<?php

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
Route::post('/login', 'SessionsController@Login');
Route::post('/register', 'RegisterController@Create');
Route::get('/register', 'RegisterController@load');
Route::get('/setup', 'setup@testing');
Route::post('/admin/catigory', 'cat_control@create_cat');
Route::get('/', 'homepage@home');

Route::get('/catigory', function () {
    return view('catigory');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/bayers', function () {
    return view('bayers');
});
Route::get('/board', function () {
    return view('board');
})->name('home');
Route::get('/sellers', function () {
    return view('sellers');
});
