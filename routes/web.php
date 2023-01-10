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

//admin 
Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index');
Route::get('/admin/show', function () {
    return view('admin.show');
})->name('admin.show');
Route::get('/admin/edit', function () {
    return view('admin.edit');
})->name('admin.edit');

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

