<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientLoginController;

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

//Patients 
Route::resource('/patients', PatientController::class);
Route::get('patients/login/patient_login', [PatientLoginController::class, "index"]);
Route::post('patients/login/patient_login', [PatientLoginController::class, "login"])->name('patient.login');
Route::post('patients/login/patient_logout', [PatientLoginController::class, "logout"])->name('patient.logout');

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

//doctor 
Route::resource('doctor',DoctorController::class);
//admin 
Route::resource('admin',AdminController::class);

// Barcharts
Route::get('/barchart', function () {
    return view('components.barchart');
})->name('barchart');

// Routes For Medicines
Route::resource('/medicines',MedicineController::class);

//Booking
Route::get('/booking', function () {
    return view('bookings.index');
})->name('booking');

//Mails
Route::get('/mails/accept', function () {
    return view('mails.booking_accept');
})->name('mails_accept');

Route::get('/mails/deny', function () {
    return view('mails.booking_deny');
})->name('mails_deny');

Route::get('/mails/ok', function () {
    return view('mails.booking_ok');
})->name('mails_ok');

Route::get('/mails/request', function () {
    return view('mails.booking_request');
})->name('mails_request');

Route::get('/mails/request_other_date', function () {
    return view('mails.booking_request_other_date');
})->name('mails_request_other_date');

