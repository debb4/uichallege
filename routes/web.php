<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sign-in');
});
Route::get('/dashboard', function () {
    return view('vsga.dashboard');
});
Route::get('/profile', function () {
    return view('vsga.profile');
});
