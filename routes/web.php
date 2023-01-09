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

// Barcharts
Route::get('/barchart', function () {
    return view('components.barchart');
})->name('barchart');
