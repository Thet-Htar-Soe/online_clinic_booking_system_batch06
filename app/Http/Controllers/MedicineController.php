<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Category;
use App\Http\Requests\StoreMedicineRequest;
use App\Http\Requests\UpdateMedicineRequest;
use App\Contracts\Services\Medicine\MedicineServiceInterface;

class MedicineController extends Controller
{
    /**
     * medicine interface 
     * */
    private $medicineInterface;
    /**
     * Create a new controller instance.
     */
    public function __construct(MedicineServiceInterface $medicineServiceInterface)
    {
        $this->medicineInterface = $medicineServiceInterface;
    }

    /**
     * To show medicines view
     * 
     * @return View medicine.index
     */
    public function index()
    {
        $medicines = $this->medicineInterface->index();
        return view('medicine.index', compact('medicines'));
    }

    /**
     * To show medicines create
     *   * 
     * @return View medicines create with categories 
     */
    public function create()
    {
        $categories = $this->medicineInterface->create();
        return view('medicine.create', compact('categories'));
    }

    /**
     * To submit medicines create 
     * @param StoreMedicineRequest $request
     * @return View medicines with create success msg
     */
    public function store(StoreMedicineRequest $request)
    {
        $this->medicineInterface->store($request);
        return redirect('/medicines')->with('success', 'Medicine Created Successfully!!!');
    }

    /**
     * To show medicine by id
     * @param $id
     * @return View medicine.show
     */
    public function show($id)
    {
        $detailMedicine = $this->medicineInterface->show($id);
        return view('medicine.show', compact('detailMedicine'));
    }

    /**
     * Show medicines edit with categories
     * @param $id
     * @return View medicines edit
     */
    public function edit($id)
    {
        $medicine = $this->medicineInterface->edit($id);
        $categories = Category::all();
        return view('medicine.edit', compact('medicine', 'categories'));
        // return $medicine;
    }

    /**
     * Submit medicines update
     * @param UpdateMedicineRequest $request
     * @param $id
     * @return View medicines with update success msg
     */
    public function update(UpdateMedicineRequest $request, $id)
    {
        $this->medicineInterface->update($request, $id);
        return redirect('/medicines')->with('update', 'Medicine Updated Successfully!!!');
    }

    /**
     * To delete medicine by id
     * @param $id
     * @return View medicines with delete success msg
     */
    public function destroy($id)
    {
        $this->medicineInterface->destroy($id);
        return redirect('/medicines')->with('delete', 'Medicine Deleted Successfully!!!');
    }
}
