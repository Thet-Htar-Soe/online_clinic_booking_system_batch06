<?php

namespace App\Dao\Medicine;

use App\Contracts\Dao\Medicine\MedicineDaoInterface;
use Illuminate\Http\Request;
use App\Models\Medicine;

/**
 * Data accessing object for medicine
 */
class MedicineDao implements MedicineDaoInterface
{
    /**
     * To show medicines view
     * 
     * @return View medicine.index
     */
    public function index()
    {
        $medicines = Medicine::first()->paginate(5);
        return $medicines;
    }

    /**
     * To show medicine by id
     * @param $id
     * @return View medicine.show
     */
    public function show($id)
    {
        $detailMedicine = Medicine::where('id', $id)->first();
        return $detailMedicine;
    }
}
