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

//Patients
Route::get('/patients', function () {
    return view('patients/index');
})->name('index');

Route::get('/patients/create', function () {
    return view('patients/create');
})->name('createPatients');

Route::get('/patients/login', function () {
    return view('patients/login');
})->name('loginPatients');

Route::get('/patients/edit', function () {
    return view('patients/edit');
})->name('editPatients');

Route::get('/patients/show', function () {
    return view('patients/show');
})->name('showPatients');


