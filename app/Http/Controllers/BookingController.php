<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\DoctorDetail;
use App\Contracts\Services\Booking\BookingServiceInterface;
use Illuminate\Http\Request;

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
    public function create()
    {
        $patientId = 21;
        $doctors = DoctorDetail::all();
        $bookingStatus = $this->bookingInterface->create();
        $bookings = Booking::where('patient_id', $patientId)->get();
        return view('bookings.create', compact('doctors', 'bookingStatus', 'bookings'));
    }

    /**
     * To submit bookings create 
     * @param Request $request
     * @return View bookings.create with status change 
     */
    public function store(Request $request)
    {
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
        if ($bookings->status == 5 || $bookings->status == null) {
            return redirect()->route('bookings.create');
        } elseif ($bookings->status == 1 || $bookings->status == 3 || $bookings->status == 4) {
            return redirect()->route('bookings.index');
        } elseif ($bookings->status == 2) {
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
        return redirect()->back()->with('delete', 'Booking Deleted Successfully!!!');
    }

    public function bookingProcess($id)
    {
        $bookings = Booking::where('id', $id)->first();
        return view("bookings.booking_process", compact('bookings'));
    }
}
