<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/doctor', function () {
    return view('doctor');
});
Route::get('/', function () {
    return view('patient');
});

//invoice 
Route::get('/invoice/index', function () {
    return view('invoice.index');
})->name('invoice.index');
Route::get('/invoice/create', function () {
    return view('invoice.create');
})->name('invoice.create');
Route::get('/invoice/search_patient', function () {
    return view('invoice.search_patient');
})->name('invoice.search_patient');
Route::get('/invoice/show', function () {
    return view('invoice.show');
})->name('invoice.show');