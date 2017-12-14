<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('salea')->user();

    //dd($users);

    return view('salea.home');
})->name('home');

