<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home1', function () {
    return view('home1');
});
Route::get('/produk1', function () {
    return view('produk1');
});
Route::get('/produk2', function () {
    return view('produk2');
});