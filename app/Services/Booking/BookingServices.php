<?php

namespace App\Services\Booking;

use App\Contracts\Dao\Booking\BookingDaoInterface;
use App\Contracts\Services\Booking\BookingServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for booking
 */
class BookingServices implements BookingServiceInterface
{
    /**
     * booking dao
     */
    private $bookingDao;

    /**
     * Class Constructor
     * @param bookingDaoInterface
     */
    public function __construct(BookingDaoInterface $bookingDao)
    {
        $this->bookingDao = $bookingDao;
    }

    /**
     * To show bookings view with paginate
     * 
     * @return View bookings.index
     */
    public function index()
    {
        return $this->bookingDao->index();
    }

    /**
     * To show bookings create
     *   * 
     * @return View bookings create with doctors and bookingStatus
     */
    public function create()
    {
        return $this->bookingDao->create();
    }

    /**
     * To submit bookings create 
     * @param Request $request
     * @return View bookings.create with status change 
     */
    public function store($request)
    {
        return $this->bookingDao->store($request);
    }

    /**
     * To show booking by id
     * @param $id
     * @return View bookings.show
     */
    public function show($id)
    {
        return $this->bookingDao->show($id);
    }

    /**
     * Submit bookings update with status change
     * @param Request $request
     * @param $id
     * @return View medicines with update success msg
     */
    public function update($request, $id)
    {
        return $this->bookingDao->update($request, $id);
    }

    /**
     * To delete booking by id
     * @param $id
     * @return View bookings with delete success msg
     */
    public function destroy($id)
    {
        return $this->bookingDao->destroy($id);
    }
}
