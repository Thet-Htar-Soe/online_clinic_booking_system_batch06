<?php

namespace App\Services\Patient;

use App\Contracts\Dao\Patient\PatientDaoInterface;
use App\Contracts\Services\Patient\PatientServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for patient
 */
class PatientServices implements PatientServiceInterface
{
    /**
     * patient dao
     */
    private $patientDao;

    /**
     * Class Constructor
     * @param patientDaoInterface
     */
    public function __construct(PatientDaoInterface $patientDao)
    {
        $this->patientDao = $patientDao;
    }

    /**
     * To show create patient view
     * 
     * @return View patients
     */
    public function index()
    {
        return $this->patientDao->index();
    }

    /**
     * To show patient by id
     * @param $id
     * @return View patients
     */
    public function show($id)
    {
        return $this->patientDao->show($id);
    }

    /**
     * To submit patient create 
     * @param $request
     * @return View patients 
     */
    public function store($request)
    {
        return $this->patientDao->store($request);
    }

    /**
     * Show students edit
     * @param $id
     * @return View students
     */
    public function edit($id)
    {
        return $this->patientDao->edit($id);
    }

    /**
     * Submit patient update
     * @param $request
     * @param $id
     * @return View patients
     */
    public function update($request, $id)
    {
        return $this->patientDao->update($request, $id);
    }

    /**
     * To delete patient by id
     * @param $id
     * @return View patients
     */
    public function delete($id)
    {
        return $this->patientDao->delete($id);
    }
}
