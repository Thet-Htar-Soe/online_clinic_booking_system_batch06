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
}
