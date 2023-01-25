<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Doctor\DoctorServiceInterface;
use App\Http\Requests\LoginDoctorRequest;
use App\Models\Doctor;
use App\Models\DoctorDetail;
use Illuminate\Support\Facades\Hash;
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

    /**
     * To show doctor login page
     * @return void
     */
    public function index()
    {
        return view('doctor.login');
    }

    /**
     * To login doctor
     *
     * @param LoginDoctorRequest $request
     * @return $doctor
     */
    public function login(LoginDoctorRequest $request)
    {
        $email = DoctorDetail::where('email', $request->email)->first();
        if ($email) {
            if (!Hash::check($request->password, $email->password)) {
                return back()->with('info', 'Password Wrong!');
            }
        }
        $doctor = $this->doctorInterface->login($request);

        if ($doctor) {
            if (!session()->has('doctor')) {
                Session::put('doctor', $doctor);
            }
            Alert::toast('Successfully Login!', 'success')->position('bottom-end');
            return redirect()->route('bookings.index');
        } else {
            return back()->with('doesNotMatch', 'This Account Does not Match With Our Record. Please Try Again!');
        }
    }

    /**
     * To logout doctor
     */
    public function logout()
    {
        Session::flush();
        return redirect('/doctor_signup');
    }
}
