<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('gen')->user();

    //dd($users);

    return view('gen.home');
})->name('home');

