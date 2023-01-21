<?php

namespace App\Http\Controllers;
use \PDF;
use App\Models\Invoice;
use Illuminate\Http\Request;

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
        //return view('invoice.invoice_pdf', compact('invoice'));
        $pdf = PDF::loadView('invoice.invoice_pdf', ['invoice' => $invoice]);
        return $pdf->download("Invoice.pdf");
    }
}
