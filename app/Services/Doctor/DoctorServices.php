<?php

namespace App\Services\Doctor;

use App\Contracts\Dao\Doctor\DoctorDaoInterface;
use App\Contracts\Services\Doctor\DoctorServiceInterface;

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
    public function store($request)
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

    /**
     * To edit doctor by id
     * @param string $id doctor id
     * * @return Object $doctor saved doctor
     */
    public function edit($id)
    {
        return $this->doctorDao->edit($id);
    }

    /**
     * To update doctor by id
     * @param UpdateDoctorRequest $request request with inputs
     * @param string $id doctor id
     * @return Object $doctor Doctor Object
     */
    public function update($request, $id)
    {
        return $this->doctorDao->update($request, $id);
    }
    
    /**
     * To delete doctor by id
     * @param string $id doctor id
     * @param string $id deleted doctor id
     */
    public function destroy($id)
    {
        return $this->doctorDao->destroy($id);
    }

     /**
     * To submit doctor login 
     * @param $request
     * @return View doctors 
     */
    public function login($request){
        return $this->doctorDao->login($request);
    }
}
