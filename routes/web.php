<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // dd("hellow");
    return view('welcome');
});

Route::get('/productForm', function () {
   return view('productForm');
})->name('productForm.create');