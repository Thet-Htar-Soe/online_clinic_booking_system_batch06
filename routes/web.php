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

//doctor 
Route::get('/doctor/index', function () {
    return view('doctor.index');
})->name('doctor_list');
Route::get('/doctor/create', function () {
    return view('doctor.create');
})->name('doctor_create');
Route::get('/doctor/show', function () {
    return view('doctor.show');
})->name('doctor_show');
Route::get('/doctor/edit', function () {
    return view('doctor.edit');
})->name('doctor_edit');