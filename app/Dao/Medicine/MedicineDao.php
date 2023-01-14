<?php

namespace App\Dao\Medicine;

use App\Contracts\Dao\Medicine\MedicineDaoInterface;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Category;

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
        $medicines = Medicine::latest()->paginate(5);
        return $medicines;
    }

    /**
     * To show medicine by id
     * @param $id
     * @return View medicine.show
     */
    public function show($id)
    {
        $detailMedicine = Medicine::where('id', $id)->firstOrFail();
        return $detailMedicine;
    }

    /**
     * To show medicines create
     *   * 
     * @return View medicines create with categories 
     */
    public function create()
    {
        $categories = Category::all();
        return $categories;
    }

    /**
     * To submit medicines create 
     * @param StoreMedicineRequest $request
     * @return View medicines with create success msg
     */
    public function store($request)
    {
        $name = $request->name;
        $classification = $request->classification;
        $symptom = $request->symptom;
        $treatment = $request->treatment;
        $quantity = $request->quantity;
        $price = $request->price;
        $medicine = Medicine::create([
            "name" => $name,
            "classification" => $classification,
            "symptom" => $symptom,
            "treatment" => $treatment,
            "quantity" => $quantity,
            "price" => $price
        ]);

        //add category(many to many relationship)
        $medicineId = Medicine::find($medicine->id);
        $medicineId->category()->sync($request->category_id);
    }

    /**
     * Show medicines edit with categories
     * @param $id
     * @return View medicines edit
     */
    public function edit($id)
    {
        $medicine = Medicine::with('category')->where('id', $id)->firstOrFail();
        return $medicine;
    }

    /**
     * Submit medicines update
     * @param UpdateMedicineRequest $request
     * @param $id
     * @return View medicines with update success msg
     */
    public function update($request, $id)
    {
        $medicine = Medicine::where('id', $id);
        $name = $request->name;
        $classification = $request->classification;
        $symptom = $request->symptom;
        $treatment = $request->treatment;
        $quantity = $request->quantity;
        $price = $request->price;
        $medicine->update([
            "name" => $name,
            "classification" => $classification,
            "symptom" => $symptom,
            "treatment" => $treatment,
            "quantity" => $quantity,
            "price" => $price
        ]);

        //update category(many to many relationship)
        $medicineId = Medicine::find($medicine->first()->id);
        $medicineId->category()->sync($request->category_id);
    }

    /**
     * To delete medicine by id
     * @param $id
     * @return View medicines with delete success msg
     */
    public function destroy($id)
    {
        $medicine = Medicine::where('id', $id);
        $medicineId = Medicine::find($medicine->first()->id);
        $medicineId->category()->sync([]);
        $medicine->delete();
    }
}
