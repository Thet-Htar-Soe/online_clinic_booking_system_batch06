<?php

namespace App\Http\Controllers\Auth\Doctor;

use App\Http\Controllers\Controller;
use App\Models\DoctorDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $doctor = DoctorDetail::where('email',$request->email)->get();
        if($doctor)
        {
            Session::put('doctor', $doctor);
            return redirect('doctor');
        }
        else 
        {
            return redirect('login');
        }
    }

    public function logout()
    {
        Session::forget('doctor');
        return redirect('login');
    }
}
