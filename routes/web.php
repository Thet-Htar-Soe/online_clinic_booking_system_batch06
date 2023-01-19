<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorLoginController;
use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DashboardController;

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
Route::get('/barchart', [DashboardController::class,"weekly"])->name('barchart.weekly');
Route::get('/barchart/monthly', [DashboardController::class,"monthly"])->name('barchart.monthly');
Route::get('/barchart/yearly', [DashboardController::class,"yearly"])->name('barchart.yearly');

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

//doctor login
Route::get('/doctor_signup', [DoctorLoginController::class, "index"])->name('doctor.signup');
Route::post('/doctor/login', [DoctorLoginController::class, "login"])->name('doctor.login');
Route::get('/doctor_logout', [DoctorLoginController::class, "logout"])->name('doctor.logout');
