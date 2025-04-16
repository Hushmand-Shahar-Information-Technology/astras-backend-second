<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('form','productView');
Route::view('table1','table');
Route::view('table2','table2');
Route::view('table3','table۳');
