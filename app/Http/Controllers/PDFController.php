<?php

namespace App\Http\Controllers;
use \PDF;
use App\Models\Invoice;

class PDFController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($id)
    {
        $invoice = Invoice::where('id', $id)->firstOrFail();;
        $pdf = PDF::loadView('invoice.invoice_pdf', ['invoice' => $invoice]);
        return $pdf->download("Invoice.pdf");
    }
}
