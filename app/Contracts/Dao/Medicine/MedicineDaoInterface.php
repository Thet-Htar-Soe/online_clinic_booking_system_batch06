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

    /**
     * To show medicines create
     *   * 
     * @return View medicines create with categories 
     */
    public function create();

    /**
     * To submit medicines create 
     * @param StoreMedicineRequest $request
     * @return View medicines with create success msg
     */
    public function store($request);

    /**
     * Show medicines edit with categories
     * @param $id
     * @return View medicines edit
     */
    public function edit($id);

    /**
     * Submit medicines update
     * @param StoreMedicineRequest $request
     * @param $id
     * @return View medicines with update success msg
     */
    public function update($request, $id);

    /**
     * To delete medicine by id
     * @param $id
     * @return View medicines with delete success msg
     */
    public function destroy($id);

}
