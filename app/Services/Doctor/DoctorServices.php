<?php

namespace App\Services\Doctor;

use App\Contracts\Dao\Doctor\DoctorDaoInterface;
use App\Contracts\Services\Doctor\DoctorServiceInterface;
use App\Http\Requests\StoreDoctorRequest;

/**
 * Service class for doctor
 */
class DoctorServices implements DoctorServiceInterface
{
    /**
     * doctor dao
     */
    private $doctorDao;

    /**
     * Class Constructor
     * @param doctorDaoInterface
     */
    public function __construct(DoctorDaoInterface $doctorDao)
    {
        $this->doctorDao = $doctorDao;
    }
     /**
     * To get doctor list
     * @return $doctors
     */
    public function index()
    {
        return $this->doctorDao->index();
    }
     /**
     * To save doctor
     * @param StoreDoctorRequest $request request with inputs
     * @return Object $doctor saved doctor
     */
    public function store(StoreDoctorRequest $request)
    {
        return $this->doctorDao->store($request);
    }
     /**
     * To show doctor detail by id
     * @param string $id doctor id
     */
    public function show($id)
    {
        return $this->doctorDao->show($id);
    }
}
