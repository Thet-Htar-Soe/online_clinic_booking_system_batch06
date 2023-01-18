<?php

namespace App\Dao\Dashboard;

use Illuminate\Support\Facades\DB;
use App\Contracts\Dao\Dashboard\DashboardDaoInterface;
use Illuminate\Http\Request;

/**
 * Data accessing object for dashboard
 */
class DashboardDao implements DashboardDaoInterface
{
    /**
     * To show weekly incomes bar chart
     * 
     * @return View components.barcharts.weekly
     */
    public function weekly()
    {
        $sql = "select dayname(created_at) as getDate,sum(doctor_charges+grand_total) as total from invoice_details group by getDate order by getDate asc";
        $invoiceDetails = DB::select($sql);
        return $invoiceDetails;
    }

    /**
     * To show monthly incomes bar chart
     * 
     * @return View components.barcharts.monthly
     */
    public function monthly()
    {
        $sql = "select month(created_at) as getMonth,sum(doctor_charges+grand_total) as total from invoice_details group by getMonth order by getMonth asc";
        $invoiceDetails = DB::select($sql);
        return $invoiceDetails;
    }

    /**
     * To show yearly incomes bar chart
     * 
     * @return View components.barcharts.yearly
     */
    public function yearly()
    {
        $sql = "select year(created_at) as getYear,sum(doctor_charges+grand_total) as total from invoice_details group by getYear order by getYear asc";
        $invoiceDetails = DB::select($sql);
        return $invoiceDetails;
    }
}
