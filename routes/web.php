<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productForm', function () {
   return view('productForm');
})->name('productForm.create');

Route::view('form','productView');
Route::view('/train-station/import/dry','emportDryTable');
Route::view('/train-station/import/oil','emportOilTable');
Route::view('/train-station/export/dry','exportDryTable');
Route::view('/train-station/export/oil','exportOilTable');
Route::view('/table4','table4');
Route::view('/tableTask','tableTasks');
Route::view('/trainStationDashboard','trainStationDashboard');
Route::view('/dispatcher','dispatcher-form-1');
Route::view('/port1/warehouse','Port1Delivery.importedProperty');
