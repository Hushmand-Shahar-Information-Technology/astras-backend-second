<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productForm', function () {
   return view('productForm');
})->name('productForm.create');

Route::view('form','productView');
Route::view('/train-station/import/dry','table');
Route::view('/train-station/import/oil','table2');
Route::view('/train-station/export/dry','table3');
Route::view('//train-station/export/oil','exportOilTable');
Route::view('table4','table4');
Route::view('tableTask','tableTasks');
