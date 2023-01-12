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
}
