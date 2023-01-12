<?php

namespace App\Services\Medicine;

use App\Contracts\Dao\Medicine\MedicineDaoInterface;
use App\Contracts\Services\Medicine\MedicineServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for medicine
 */
class MedicineServices implements MedicineServiceInterface
{
    /**
     * medicine dao
     */
    private $medicineDao;

    /**
     * Class Constructor
     * @param medicineDaoInterface
     */
    public function __construct(MedicineDaoInterface $medicineDao)
    {
        $this->medicineDao = $medicineDao;
    }

    /**
     * To show medicines view
     * 
     * @return View medicine.index
     */
    public function index()
    {
        return $this->medicineDao->index();
    }

    /**
     * To show medicine by id
     * @param $id
     * @return View medicine.show
     */
    public function show($id)
    {
        return $this->medicineDao->show($id);
    }
}
