<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Patient\PatientServiceInterface;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Booking;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class PatientController extends Controller
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
        $this->middleware('admin', ['only' => [
            'index',
        ]]);
        $this->middleware('patient', ['except' => [
            'index', 'doctorListByPatient', 'searchDoctor', 'doctorDetail', 'create', 'store', 'home'
        ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = $this->patientInterface->index();
        return view('patients.list', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
        $this->patientInterface->store($request);
        Alert::toast('Successfully Registered!', 'success')->position('bottom-end');
        return redirect()->route('patient.login');
    }

    /**
     * Display the specified resource.
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = $this->patientInterface->show($id);
        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = $this->patientInterface->edit($id);
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, $id)
    {
        $this->patientInterface->update($request, $id);
        Alert::toast('Successfully updated your information!', 'success')->position('bottom-end');
        return redirect()->route('patients.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->patientInterface->delete($id);
        Alert::alert()->success('Success!', 'Successfully delected your account!')->autoClose(1800);
        Session::flush();
        return redirect()->route('patient.login');
    }
    
    /**
     * To show doctor list for patient home page
     *
     * @return $doctors
     */
    public function doctorListByPatient()
    {
        $doctors = $this->patientInterface->doctorListByPatient();
        return view('patients.doctor_list', compact('doctors'));
    }

    /**
     * To show doctor detail
     * @param $id
     * @return $doctor
     */
    public function doctorDetail($id)
    {
        $doctor = Doctor::where('id', $id)->firstOrFail();
        return view('patients.doctor_detail', compact('doctor'));
    }

    /**
     * To search doctor from patient home page
     * @param $request
     * @return $doctors
     */
    public function searchDoctor(Request $request)
    {
        $doctors = $this->patientInterface->searchDoctor($request);
        return view('patients.doctor_list', compact('doctors'));
    }

    /**
     * To show booking list
     * @return $doctors
     */
    public function bookingList()
    {
        $patientId = session('patient')->id;
        $bookings = Booking::where('patient_id', $patientId)->paginate(config('data.pagination'));;
        return view('patients.booking_list', compact('bookings'));
    }

    /**
     * To show home page of patient
     * @return $doctors
     */
    public function home()
    {
        $doctors = Doctor::orderBy('id', 'DESC')->get();
        return view('patients.index', compact('doctors'));
    }
}
