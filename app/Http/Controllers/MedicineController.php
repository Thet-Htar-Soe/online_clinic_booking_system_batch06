<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreMedicineRequest;
use Illuminate\Http\Request;
use App\Contracts\Services\Medicine\MedicineServiceInterface;
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::toast('Successfully created medicine!', 'success')->position('bottom-end');
        return redirect('/medicines');
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
    }

    /**
     * Submit medicines update
     * @param StoreMedicineRequest $request
     * @param $id
     * @return View medicines with update success msg
     */
    public function update(StoreMedicineRequest $request, $id)
    {
        $this->medicineInterface->update($request, $id);
        Alert::toast('Successfully updated medicine!', 'success')->position('bottom-end');
        return redirect('/medicines');
    }

    /**
     * To delete medicine by id
     * @param $id
     * @return View medicines with delete success msg
     */
    public function destroy($id)
    {
        $this->medicineInterface->destroy($id);
        Alert::toast('Successfully deleted medicine!', 'success')->position('bottom-end');
        return redirect('/medicines');
    }

    /**
     * To show import csv files for medicines
     *   * 
     * @return View students import
     */
    public function import()
    {
        return view("medicine.import");
    }

    /**
     * To upload csv file for medicines
     * @param Request $request
     * @return view medicines 
     */
    public function importMedicines(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv',
        ], [
            'file.required' => 'Please Choose Your CSV File!!!',
            'mimes'    => 'File Must Be CSV File Type!!!',
        ]);
        $this->medicineInterface->importMedicines($request);
        Alert::toast('Successfully Imported Medicine File!', 'success')->position('bottom-end');
        return redirect('patient_login');
    }
}
