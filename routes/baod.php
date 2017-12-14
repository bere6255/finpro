<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('baod')->user();

    //dd($users);

    return view('baod.home');
})->name('home');

