<?php

namespace App\Services\Invoice;

use App\Contracts\Dao\Invoice\InvoiceDetailDaoInterface;
use App\Contracts\Services\Invoice\InvoiceDetailServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for invoicedetail
 */
class InvoiceDetailServices implements InvoiceDetailServiceInterface
{
    /**
     * invoicedetail dao
     */
    private $invoicedetailDao;

    /**
     * Class Constructor
     * @param invoicedetailDaoInterface
     */
    public function __construct(InvoiceDetailDaoInterface $invoicedetailDao)
    {
        $this->invoicedetailDao = $invoicedetailDao;
    }
}
