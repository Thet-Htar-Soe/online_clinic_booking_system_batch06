<?php

namespace App\Contracts\Dao\Invoice;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of invoice
 */
interface InvoiceDaoInterface
{
    /**
     * To get invoice list
     * @return $invoices
     */
    public function index();
    /**
     * To save invoice
     * @param StoreInvoiceRequest $request request with inputs
     * @return Object $invoice saved invoice
     */
    public function store($request);
    /**
     * To show invoice detail by id
     * @param string $id invoice id
     */
    public function show($id);
    /**
     * To edit invoice by id
     * @param string $id invoice id
     * * @return Object $invoice saved invoice
     */
    public function edit($id);
    /**
     * To update invoice by id
     * @param UpdateInvoiceRequest $request request with inputs
     * @param string $id invoice id
     * @return Object $invoice invoice Object
     */
    public function update($request, $id);
    /**
     * To delete invoice by id
     * @param string $id invoice id
     * @param string $id deleted invoice id
     */
    public function destroy($id);
    
    /**
     * To get booking list
     * @return $booking
     */
    public function bookingList();

    /**
     * To save invoice
     * @param StoreInvoiceRequest $request request with inputs
     * @return Object $invoice saved invoice
     */
    public function invoiceCreate($id);
}
