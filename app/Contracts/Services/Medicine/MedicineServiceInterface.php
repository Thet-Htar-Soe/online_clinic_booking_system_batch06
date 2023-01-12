<?php

namespace App\Contracts\Services\Medicine;

use Illuminate\Http\Request;

/**
 * Interface for medicine service
 */
interface MedicineServiceInterface
{
    /**
     * To show medicines view
     * 
     * @return View medicine.index
     */
    public function index();

    /**
     * To show medicine by id
     * @param $id
     * @return View medicine.show
     */
    public function show($id);
}
