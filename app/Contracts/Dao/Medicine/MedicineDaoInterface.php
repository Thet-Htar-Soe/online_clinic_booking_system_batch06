<?php

namespace App\Contracts\Dao\Medicine;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of medicine
 */
interface MedicineDaoInterface
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
