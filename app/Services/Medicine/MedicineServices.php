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

    /**
     * To show medicines create
     *   * 
     * @return View medicines create with categories 
     */
    public function create()
    {
        return $this->medicineDao->create();
    }

    /**
     * To submit medicines create 
     * @param StoreMedicineRequest $request
     * @return View medicines with create success msg
     */
    public function store($request)
    {
        return $this->medicineDao->store($request);
    }

    /**
     * Show medicines edit with categories
     * @param $id
     * @return View medicines edit
     */
    public function edit($id)
    {
        return $this->medicineDao->edit($id);
    }

    /**
     * Submit medicines update
     * @param UpdateMedicineRequest $request
     * @param $id
     * @return View medicines with update success msg
     */
    public function update($request, $id)
    {
        return $this->medicineDao->update($request, $id);
    }

    /**
     * To delete medicine by id
     * @param $id
     * @return View medicines with delete success msg
     */
    public function destroy($id)
    {
        return $this->medicineDao->destroy($id);
    }
}
