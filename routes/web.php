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

Route::get('/logistics', function () {
    return view('logistics');
});

Route::get('/ecommerce', function () {
    return view('ecommerce');
});

Route::get('/company', function () {
    return view('company');
});
Route::get('/procurement', function () {
    return view('procurement');
});

Route::get('/supplychain', function () {
    return view('supplychain');
});

Route::get('/company', function () {
    return view('company');
});

