<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Booking\BookingServiceInterface;
use App\Enums\BookingStatus;
use App\Mail\BookingAcceptMail;
use App\Mail\BookingDenyMail;
use App\Mail\BookingOkMail;
use App\Mail\BookingOtherDateMail;
use App\Mail\BookingRequestMail;
use App\Models\Booking;
use App\Models\DoctorDetail;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    /**
     * booking interface
     * */
    private $bookingInterface;
    /**
     * Create a new controller instance.
     */
    public function __construct(BookingServiceInterface $bookingServiceInterface)
    {
        $this->bookingInterface = $bookingServiceInterface;
        $this->middleware('patient', ['only' => [
            'createBooking', 
        ]]);
        $this->middleware('doctor', ['only' => [
            'destroy', 'index',
        ]]);
    }

    /**
     * To show bookings view with paginate
     *
     * @return View bookings.index
     */
    public function index()
    {
        $bookings = $this->bookingInterface->index();
        return view("bookings.index", compact("bookings"));
    }

    /**
     * To show bookings create
     *   *
     * @return View bookings create with doctors and bookingStatus
     */
    public function createBooking($id)
    {
        $patientId = session('patient')->id;
        $doctorID = $id;
        $doctors = DoctorDetail::all();
        $bookingStatus = $this->bookingInterface->create();
        $bookings = Booking::where('patient_id', $patientId)->get();
        return view('bookings.create', compact('doctors', 'bookingStatus', 'bookings', 'doctorID'));
    }

    /**
     * To submit bookings create
     * @param Request $request
     * @return View bookings.create with status change
     */
    public function store(Request $request)
    {
        $patientInfo = Patient::where('id', $request->patientName)->first();
        $doctorID = $request->doctorName;
        $doctorInfo = DoctorDetail::where('id', $doctorID)->first();
        $mailData = [];
        $mailData["name"] = $doctorInfo->name;
        $mailData["patientName"] = $patientInfo->name;
        $mailData["first_date"] = $request->bookingDate[0];
        $mailData["second_date"] = $request->bookingDate[1];
        $mailData["third_date"] = $request->bookingDate[2];
        $mailData["email"] = $doctorInfo->email;
        $mailData["title"] = "From pyaephyoaung31999@gmail.com";

        Mail::to($mailData["email"])->send(new BookingRequestMail($mailData));

        if ($request->bookingDate[0] == null || $request->bookingDate[1] == null || $request->bookingDate[2] == null || $request->doctorName == "") {
            return redirect()->route('bookings.create')->with('errMsg', 'This is required field!!!');
        }

        $bookingId = $this->bookingInterface->store($request);
        return redirect()->route('bookings.process', $bookingId);
    }

    /**
     * To show booking by id
     * @param $id
     * @return View bookings.show
     */
    public function show($id)
    {
        $booking = $this->bookingInterface->show($id);
        $bookingStatus = $booking->status;
        return view('bookings.show', compact('booking', 'bookingStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Submit bookings update with status change
     * @param Request $request
     * @param $id
     * @return View medicines with update success msg
     */
    public function update(Request $request, $id)
    {
        $this->bookingInterface->update($request, $id);
        $bookings = Booking::where('id', $id)->first();
        if ($bookings->status == BookingStatus::bookingReject || $bookings->status == null) {
            return redirect()->route('home');
        } elseif ($bookings->status == BookingStatus::doctorConfirm || $bookings->status == BookingStatus::doctorDeny || $bookings->status == BookingStatus::doctorChooseOtherDate) {
            //choose one date of patient booking request
            if ($bookings->status == BookingStatus::doctorConfirm) {
                $acceptMailData = [];
                $acceptMailData["patietnName"] = $bookings->patients->name;
                $acceptMailData["acceptDate"] = $request->confirmDate;
                $acceptMailData["email"] = $bookings->patients->email;
                $acceptMailData["title"] = "From pyaephyoaung31999@gmail.com";
                Mail::to($acceptMailData["email"])->send(new BookingAcceptMail($acceptMailData));
            }
            //deny booking request
            elseif ($bookings->status == BookingStatus::doctorDeny) {
                $denyMailData = [];
                $denyMailData["patietnName"] = $bookings->patients->name;
                $denyMailData["email"] = $bookings->patients->email;
                $denyMailData["title"] = "From pyaephyoaung31999@gmail.com";
                Mail::to($denyMailData["email"])->send(new BookingDenyMail($denyMailData));
            }
            //choose another available date by doctor
            elseif ($bookings->status == BookingStatus::doctorChooseOtherDate) {
                $otherDateMailData = [];
                $otherDateMailData["patietnName"] = $bookings->patients->name;
                $otherDateMailData["confirmDate"] = $request->confirmDate;
                $otherDateMailData["email"] = $bookings->patients->email;
                $otherDateMailData["title"] = "From pyaephyoaung31999@gmail.com";
                Mail::to($otherDateMailData["email"])->send(new BookingOtherDateMail($otherDateMailData));
            }
            return redirect()->route('bookings.index');
        } elseif ($bookings->status == BookingStatus::bookingSuccess) {
            //confirm booking by patient
            $okMailData = [];
            $okMailData["name"] = $bookings->doctors->doctorDetail->name;
            $okMailData["email"] = $bookings->doctors->doctorDetail->email;
            $okMailData["title"] = "From pyaephyoaung31999@gmail.com";
            Mail::to($okMailData["email"])->send(new BookingOkMail($okMailData));
            return redirect()->route('bookings.process', $id);
        }
    }

    /**
     * To delete booking by id
     * @param $id
     * @return View bookings with delete success msg
     */
    public function destroy($id)
    {
        $this->bookingInterface->destroy($id);
        Alert::toast('Successfully deleted booking!', 'success')->position('bottom-end');
        return redirect()->back();
    }

    /**
     * To change booking status
     * @param $id
     * @return View bookings process with bookings data
     */
    public function bookingProcess($id)
    {
        $bookings = Booking::where('id', $id)->first();
        return view("bookings.booking_process", compact('bookings'));
    }
}
