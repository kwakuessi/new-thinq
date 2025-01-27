<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/partnership', function () {
    return view('partnership');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/company', function () {
    return view('company');
});

Route::get('/collaboration', function () {
    return view('collaboration');
});

Route::get('/procurement', function () {
    return view('procurement');
});

