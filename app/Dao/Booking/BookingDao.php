<?php

namespace App\Dao\Booking;

use App\Models\Booking;
use App\Contracts\Dao\Booking\BookingDaoInterface;
use Illuminate\Http\Request;

/**
 * Data accessing object for booking
 */
class BookingDao implements BookingDaoInterface
{
    /**
     * To show bookings view with paginate
     * 
     * @return View bookings.index
     */
    public function index()
    {
        $bookings = Booking::first()->paginate(5);
        return $bookings;
    }

    /**
     * To show bookings create
     *   * 
     * @return View bookings create with doctors and bookingStatus
     */
    public function create()
    {
        $patientId = 200;
        $bookingInfo = Booking::where('patient_id', $patientId)->first();
        if ($bookingInfo) {
            $bookingStatus = $bookingInfo->status;
            $bookings = Booking::all();
        } else {
            $bookingStatus = null;
        }
        return $bookingStatus;
    }

    /**
     * To submit bookings create 
     * @param StoreBookingRequest $request
     * @return View bookings.create with status change 
     */
    public function store($request)
    {
        $bookingDate = $request->bookingDate;
        $patientName = $request->patientName;
        $doctorName = $request->doctorName;
        $booking = Booking::create([
            'book_date' => $bookingDate,
            'patient_id' => $patientName,
            'doctor_id' => $doctorName,
        ]);
        $bookingId = $booking->id;
        $bookingInfo = Booking::where('id', $bookingId)->first();
        $bookingStatus = $bookingInfo->status;
        return $bookingStatus;
    }

    /**
     * To show booking by id
     * @param $id
     * @return View bookings.show
     */
    public function show($id)
    {
        $booking = Booking::where('id', $id)->first();
        return $booking;
    }

    /**
     * Submit bookings update with status change
     * @param Request $request
     * @param $id
     * @return View medicines with update success msg
     */
    public function update($request, $id)
    {
        if ($request->status == 0 && $request->condition == "confirm") {
            Booking::where('id', $id)->update([
                'status' => 1
            ]);
        } elseif ($request->condition == "deny") {
            Booking::where('id', $id)->update([
                'status' => 3
            ]);
        }
    }

    /**
     * To delete booking by id
     * @param $id
     * @return View bookings with delete success msg
     */
    public function destroy($id)
    {
        Booking::where('id', $id)->delete();
    }
}
