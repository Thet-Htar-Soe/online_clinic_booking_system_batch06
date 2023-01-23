<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Invoice\InvoiceServiceInterface;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Booking;
use App\Models\Invoice;
use App\Models\Medicine;
use App\Models\Patient;
use RealRashid\SweetAlert\Facades\Alert;

class InvoiceController extends Controller
{
    private $invoiceInterface;

    public function __construct(InvoiceServiceInterface $invoiceServiceInterface)
    {
        $this->invoiceInterface = $invoiceServiceInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = $this->invoiceInterface->index();
        return view('invoice.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        $invoiceDetail = $this->invoiceInterface->store($request);
        return redirect()->route('invoice.show', $invoiceDetail->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = $this->invoiceInterface->show($id);
        return view('invoice.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->invoiceInterface->destroy($id);
        Alert::toast('Successfully delected invoice Information!', 'success')->position('bottom-end');
        return redirect('invoice');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bookingList()
    {
        $bookings = $this->invoiceInterface->bookingList();
        return view('invoice.booking_list', compact('bookings'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoiceCreate($id)
    {
        $booking = Booking::where('id', $id)->get();
        $patientId = $booking[0]->patient_id;
        $medicines = Medicine::all();
        $patient = Patient::where('id', $patientId)->get();
        return view('invoice.create', compact('medicines', 'booking', 'patient'));
    }

    /**
     * To search booking list
     * @param $key
     * @return void
     */
    public function searchBooking($key)
    {
        $bookings = $this->invoiceInterface->searchBooking($key);
        return response()->json($bookings, 200);
    }
}
