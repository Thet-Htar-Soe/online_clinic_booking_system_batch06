<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Patient\PatientServiceInterface;
use App\Http\Requests\StorePatientRequest;
use App\Models\Booking;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'index', 'doctorListByPatient', 'searchDoctor', 'doctorDetail', 'create', 'store'
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
    public function update(StorePatientRequest $request, $id)
    {
        $this->patientInterface->update($request, $id);
        return redirect()->route('patients.index');
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
        return redirect()->route('patient.login');
    }
    public function doctorListByPatient()
    {
        $doctors = DB::table('doctors')
            ->join('doctor_details', 'doctor_id', '=', 'doctors.id')
            ->select('doctors.*', 'doctor_details.*')
            ->where('doctors.is_active', '=', 1)
            ->get(['doctors.*', 'doctor_details.*']);

        return view('patients.doctor_list', compact('doctors'));
    }
    public function doctorDetail($id)
    {
        $doctor = Doctor::where('id', $id)->firstOrFail();
        return view('patients.doctor_detail', compact('doctor'));
    }
    public function searchDoctor(Request $request)
    {
        $request->validate([
            'doctorSearch' => "required",
        ], ['doctorSearch.required' => "Enter Name!"]);
        $doctors = DB::table('doctors')
            ->leftJoin('doctor_details', 'doctor_id', '=', 'doctors.id')
            ->select('doctors.*', 'doctor_details.*')
            ->where('doctor_details.name', 'LIKE', '%' . $request->doctorSearch . '%')
            ->get(['doctors.*', 'doctor_details.*']);
        return view('patients.doctor_list', compact('doctors'));
    }
    public function bookingList()
    {
        $patientId = session('patient')->id;
        $bookings = Booking::where('patient_id', $patientId)->get();
        return view('patients.booking_list', compact('bookings'));
    }
}
