<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Doctor\DoctorServiceInterface;
use App\Http\Requests\LoginDoctorRequest;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorLoginController extends Controller
{
    private $doctorInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DoctorServiceInterface $doctorServiceInterface)
    {
        $this->doctorInterface = $doctorServiceInterface;
    }
    public function index()
    {
        return view('doctor.login');
    }

    public function login(LoginDoctorRequest $request)
    {
        $doctor = $this->doctorInterface->login($request);

        if ($doctor) {
            if(!session()->has('doctor'))
            {
                Session::put('doctor', $doctor);
            }
            Alert::toast('You are successfully login!', 'success')->position('bottom-end');
            return view('doctor.home');
        } else {
            Alert::toast('Email or Password Wring!', 'warning')->position('center')->autoClose(1800);
            return redirect()->route('doctor.signup');
        }
    }
    public function logout()
    {
        Session::flash('doctor');
        return redirect()->route('doctor.signup');
    }
}
