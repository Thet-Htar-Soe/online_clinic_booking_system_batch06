<?php

namespace App\Services\Doctor;

use App\Contracts\Dao\Doctor\DoctorDaoInterface;
use App\Contracts\Services\Doctor\DoctorServiceInterface;
use Illuminate\Http\Request;

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
    
}
