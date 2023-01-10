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

Route::get('/patient', function () {
    return view('patients.index');
})->name("home");

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

// Barcharts
Route::get('/barchart', function () {
    return view('components.barchart');
})->name('barchart');


// Routes For Medicines
Route::get('/medicines', function () {
    return view('medicine/index');
})->name('medicines');
Route::get('/medicines/create', function () {
    return view('medicine/create');
})->name('medicines_create');
Route::get('/medicines/show', function () {
    return view('medicine/show');
})->name('medicines_show');
Route::get('/medicines/edit', function () {
    return view('medicine/edit');
})->name('medicines_edit');

