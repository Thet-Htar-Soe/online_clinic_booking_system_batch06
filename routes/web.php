<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorLoginController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MedicineController;
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

//Home
Route::get('/', function () {
    return view('patients.index');
})->name("home");
//Admin
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::resource('/admin', AdminController::class);
    Route::get('/admin_logout', [AdminLoginController::class, "logout"])->name('admin.logout');
    Route::get('/barchart', [DashboardController::class, "weekly"])->name('barchart.weekly');
    Route::get('/barchart/monthly', [DashboardController::class, "monthly"])->name('barchart.monthly');
    Route::get('/barchart/yearly', [DashboardController::class, "yearly"])->name('barchart.yearly');
});
//Doctor
Route::middleware('doctor')->group(function () {
    Route::get('/doctor_home', [DoctorController::class, "home"])->name('doctor.home');
    Route::get('/doctor_logout', [DoctorLoginController::class, "logout"])->name('doctor.logout');
    Route::resource('/medicines', MedicineController::class);
    Route::get('/medicine/import', [MedicineController::class, 'import'])->name('medicines.import');
    Route::post('/medicine/importMedicines', [MedicineController::class, 'importMedicines'])->name('medicines.importMedicines');
    Route::resource('/invoice', InvoiceController::class);
    Route::get('/generate_pdf/{id}', [PDFController::class, "generatePDF"])->name('invoice.generatePDF');
    Route::get('/bookingList', [InvoiceController::class, "bookingList"])->name('checkout.bookingList');
    Route::get('/invoice_create/{id}', [InvoiceController::class, "invoiceCreate"])->name('invoice.invoicecreate');
    Route::get('/search_booking/{key}', [InvoiceController::class, "searchBooking"]);
});
//Patient
Route::middleware('patient')->group(function () {
    Route::post('/patient_logout', [PatientLoginController::class, "logout"])->name('patient.logout');
    Route::get('/bookings_process/{id}', [BookingController::class, "bookingProcess"])->name("bookings.process");
    Route::get('/createBooking/{id}', [BookingController::class, "createBooking"])->name("bookings.createBooking");
    Route::get('/booking_list', [PatientController::class, "bookingList"])->name("patients.booking_list");
});
//Admin Authentication
Route::get('/admin_signup', [AdminLoginController::class, "index"])->name('admin.signup');
Route::post('/admin/login', [AdminLoginController::class, "login"])->name('admin.login');
//Doctor Authentication
Route::get('/doctor_signup', [DoctorLoginController::class, "index"])->name('doctor.signup');
Route::post('/doctor/login', [DoctorLoginController::class, "login"])->name('doctor.login');
//Patients Authentication
Route::get('patient_login', [PatientLoginController::class, "index"]);
Route::post('patient_login', [PatientLoginController::class, "login"])->name('patient.login');

//Booking
Route::resource('/bookings', BookingController::class);
Route::get('doctor_list_patient', [PatientController::class, "doctorListByPatient"])->name('doctor.list');
Route::post('doctor_search', [PatientController::class, "searchDoctor"])->name('doctor.search');
Route::get('doctor_detail/{id}', [PatientController::class, "doctorDetail"])->name('doctor.detail');
//Patient
Route::resource('/patients', PatientController::class);
//Doctor
Route::resource('doctor', DoctorController::class);
//Mail
Route::middleware('patient')->group(function () {
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
});
