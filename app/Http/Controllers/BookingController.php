<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
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
        $doctors = DoctorDetail::all();
        $bookingStatus = $this->bookingInterface->create();
        return view('bookings.create', compact('doctors', 'bookingStatus'));
    }

    /**
     * To submit bookings create 
     * @param StoreBookingRequest $request
     * @return View bookings.create with status change 
     */
    public function store(StoreBookingRequest $request)
    {
        $doctors = DoctorDetail::all();
        $bookings = $request->bookingDate;
        $bookingStatus = $this->bookingInterface->store($request);
        return view('bookings.create', compact('bookingStatus', 'doctors','bookings'));
    }


    /**
     * To show booking by id
     * @param $id
     * @return View bookings.show
     */
    public function show($id)
    {
        $booking = $this->bookingInterface->show($id);
        return view('bookings.show', compact('booking'));
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
        return redirect()->back();
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
}
