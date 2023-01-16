<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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
Route::get('/doctor/index', [DoctorController::class, 'index'])->name('doctor.index');
Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
Route::post('/doctor/store', [DoctorController::class, 'store'])->name('doctor.store');
Route::get('/doctor/show/{id}', [DoctorController::class, 'show'])->name('doctor.show');
Route::get('/doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::put('/doctor/update/{id}', [DoctorController::class, 'update'])->name('doctor.update');
Route::delete('/doctor/destroy/{id}', [DoctorController::class, 'destroy'])->name('doctor.destroy');

//admin 
Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/admin/show/{id}', [AdminController::class, "show"])->name('admin_show');

Route::get('/admin/edit', function () {
    return view('admin.edit');
})->name('admin.edit');

// Barcharts
Route::get('/barchart', function () {
    return view('components.barchart');
})->name('barchart');

// Routes For Medicines
Route::get('/medicines', [MedicineController::class,"index"])->name('medicines');
Route::get('/medicines/create', function () {
    return view('medicine/create');
})->name('medicines_create');
Route::get('/medicines/show/{id}', [MedicineController::class,"show"])->name('medicines_show');
Route::get('/medicines/edit', function () {
    return view('medicine/edit');
})->name('medicines_edit');

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

