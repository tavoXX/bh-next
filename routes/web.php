<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/cadastroloja', function () {
    return view('cadastroloja');
});
Route::get('/logincliente', function () {
    return view('logincliente');
});


