<?php

namespace App\Dao\Invoice;

use App\Contracts\Dao\Invoice\InvoiceDaoInterface;
use App\Models\Booking;
use App\Models\Invoice;
use App\Models\InvoiceDetail;

/**
 * Data accessing object for invoice
 */
class InvoiceDao implements InvoiceDaoInterface
{
    /**
     * To get invoice list
     * @return $invoices
     */
    public function index()
    {
        $invoices = Invoice::paginate(5);
        return $invoices;
    }
    /**
     * To save invoice
     * @param StoreInvoiceRequest $request request with inputs
     * @return Object $invoice saved invoice
     */
    public function store($request)
    {
        $medicines = array();
        for ($j = 0; $j < count($request->medicine); $j++) {
            $medicines[] = [
                "qty" => $request->qty[$j],
                "name" => $request->medicine[$j],
                "price" => $request->price[$j],
                "total" => $request->total[$j],
            ];
        }
        $invoice = Invoice::create([
            'booking_id' => $request->booking_no,
            'invoice_no' => $request->invoice_no,
        ]);
        $invoiceDetail = InvoiceDetail::create([
            'invoice_id' => $invoice->id,
            'medicines' => $medicines,
            'doctor_charges' => $request->doctor_charges,
            'grand_total' => $request->grand_total,
        ]);
        return $invoiceDetail;
    }
    /**
     * To show invoice detail by id
     * @param string $id invoice id
     */
    public function show($id)
    {
        $invoice = Invoice::where('id', $id)->firstOrFail();
        return $invoice;
    }
    /**
     * To edit invoice by id
     * @param string $id invoice id
     * * @return Object $invoice saved invoice
     */
    public function edit($id)
    {
    }
    /**
     * To update invoice by id
     * @param UpdateInvoiceRequest $request request with inputs
     * @param string $id invoice id
     * @return Object $invoice invoice Object
     */
    public function update($request, $id)
    {
    }
    /**
     * To delete invoice by id
     * @param string $id invoice id
     * @param string $id deleted invoice id
     */
    public function destroy($id)
    {
        Invoice::where('id', $id)->delete();
    }

    /**
     * To get booking list
     * @return $booking
     */
    public function bookingList()
    {
        $bookings = Booking::paginate(10);
        return $bookings;
    }

    /**
     * To save invoice
     * @param StoreInvoiceRequest $request request with inputs
     * @return Object $invoice saved invoice
     */
    public function invoiceCreate($id)
    {
    }
}
