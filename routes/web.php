<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/home', function () {
    return view('home');
});
