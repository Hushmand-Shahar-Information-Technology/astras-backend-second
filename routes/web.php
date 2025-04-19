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
Route::view('/dispatcher','dispatcher-forms/dispatcher-form-1');
Route::view('/dispatcher-table-1','dispatcher-forms/dispatcher-table-1');
Route::view('/dispatcher-table-2','dispatcher-forms/dispatcher-table-2');
Route::view('/dispatcher-table-3','dispatcher-forms/dispatcher-table-3');
Route::view('/dispatcher-table-4','dispatcher-forms/dispatcher-table-4');
Route::view('/dispatcher-table-5','dispatcher-forms/dispatcher-table-5');
Route::view('/dispatcher-table-6','dispatcher-forms/dispatcher-table-6');

Route::view('/company-form','company-form/company-form');
Route::view('/company-table','company-form/company-table');
Route::view('/dispatcher','dispatcher-form-1');

Route::view('/port1/warehouse','Port1Delivery.importedProperty');
Route::view('table2','Port1Delivery.transitPropertyBill2');
Route::view('table3','Port1Delivery.importedPropertyByBill');
Route::view('exporttable','Port1Delivery.exportPropertyTable');
