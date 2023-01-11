<?php

namespace App\Services\Doctor;

use App\Contracts\Dao\Doctor\DoctorDetailDaoInterface;
use App\Contracts\Services\Doctor\DoctorDetailServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for doctordetail
 */
class DoctorDetailServices implements DoctorDetailServiceInterface
{
    /**
     * doctordetail dao
     */
    private $doctordetailDao;

    /**
     * Class Constructor
     * @param doctordetailDaoInterface
     */
    public function __construct(DoctorDetailDaoInterface $doctordetailDao)
    {
        $this->doctordetailDao = $doctordetailDao;
    }
}
