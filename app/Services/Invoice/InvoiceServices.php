<?php

namespace App\Services\Invoice;

use App\Contracts\Dao\Invoice\InvoiceDaoInterface;
use App\Contracts\Services\Invoice\InvoiceServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for invoice
 */
class InvoiceServices implements InvoiceServiceInterface
{
    /**
     * invoice dao
     */
    private $invoiceDao;

    /**
     * Class Constructor
     * @param invoiceDaoInterface
     */
    public function __construct(InvoiceDaoInterface $invoiceDao)
    {
        $this->invoiceDao = $invoiceDao;
    }

    /**
     * To get invoice list
     * @return $invoices
     */
    public function index()
    {
        return $this->invoiceDao->index();
    }

    /**
     * To save invoice
     * @param StoreInvoiceRequest $request request with inputs
     * @return Object $invoice saved invoice
     */
    public function store($request)
    {
        return $this->invoiceDao->store($request);
    }

    /**
     * To show invoice detail by id
     * @param string $id invoice id
     */
    public function show($id)
    {
        return $this->invoiceDao->show($id);
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
        return $this->invoiceDao->destroy($id);
    }

    /**
     * To get booking list
     * @return $booking
     */
    public function bookingList()
    {
        return $this->invoiceDao->bookingList();
    }

    /**
     * To save invoice
     * @param $id
     * @return Object $invoice saved invoice
     */
    public function invoiceCreate($id)
    {
        return $this->invoiceDao->invoiceCreate($id);
    }

    /**
     * To search booking list to checkout
     * @param $key
     * @return Object $bookings
     */
    public function searchBooking($key)
    {
        return $this->invoiceDao->searchBooking($key);
    }
}
