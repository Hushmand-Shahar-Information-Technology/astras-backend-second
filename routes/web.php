<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productForm', function () {
   return view('productForm');
})->name('productForm.create');

Route::view('form','productView');
Route::view('table1','table');
Route::view('table2','table2');
Route::view('table3','table۳');
Route::view('table4','table4');
Route::view('tableTask','tableTasks');
Route::view('trainStationDashboard','trainStationDashboard');
