<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Patient\PatientServiceInterface;
use App\Http\Requests\LoginPatientRequest;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class PatientLoginController extends Controller
{
    /**
     * patient interface
     * */
    private $patientInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PatientServiceInterface $patientServiceInterface)
    {
        $this->patientInterface = $patientServiceInterface;
    }

    /**
     * @return View the form for patient login.
     */
    public function index()
    {
        if(!session()->has('patient'))
        {
            return view('patients.login');
        }
        return redirect()->back();
    }

    /**
     * To submit patient login
     * @param $request
     * @return View patients
     */
    public function login(LoginPatientRequest $request)
    {
        $patientEmail = Patient::where('email', $request->email)->first();

        if ($patientEmail) {
            if (!Hash::check($request->password, $patientEmail->password)) {
                return redirect()->route('patient.login')->with('wrongPsw', 'Incorrect Password!!!');
            }
        }
        $patient = $this->patientInterface->login($request);
        if ($patient) {
            if (!session()->has('patient')) {
                Session::put('patient', $patient);
            }
            Alert::toast('Successfully Login!', 'success')->position('bottom-end');
            return redirect()->route('home');
        } else {
            return redirect()->route('patient.login')->with('info', 'Email And Password Did Not Match!!!');
        }
    }

    /**
     * Logout patients.
     * @return home blade
     */
    public function logout()
    {
        Session::flush();
        return redirect()->route('patient.login');
    }
}
