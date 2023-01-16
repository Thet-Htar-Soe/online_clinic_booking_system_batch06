<?php

namespace App\Contracts\Dao\Booking;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of booking
 */
interface BookingDaoInterface
{
    /**
     * To show bookings view with paginate
     * 
     * @return View bookings.index
     */
    public function index();

    /**
     * To show bookings create
     *   * 
     * @return View bookings create with doctors and bookingStatus
     */
    public function create();

    /**
     * To submit bookings create 
     * @param StoreBookingRequest $request
     * @return View bookings.create with status change 
     */
    public function store($request);

    /**
     * To show booking by id
     * @param $id
     * @return View bookings.show
     */
    public function show($id);

    /**
     * Submit bookings update with status change
     * @param Request $request
     * @param $id
     * @return View medicines with update success msg
     */
    public function update($request, $id);

    /**
     * To delete booking by id
     * @param $id
     * @return View bookings with delete success msg
     */
    public function destroy($id);
}
