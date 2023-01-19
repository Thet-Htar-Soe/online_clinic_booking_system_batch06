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
        $sql = "SELECT 
                    DAYNAME(created_at) AS getDate,
                    SUM(doctor_charges + grand_total) AS total
                FROM
                    invoice_details
                GROUP BY getDate
                ORDER BY getDate ASC";
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
        $sql = "SELECT 
                    MONTH(created_at) AS getMonth,
                    SUM(doctor_charges + grand_total) AS total
                FROM
                    invoice_details
                GROUP BY getMonth
                ORDER BY getMonth ASC";
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
        $sql = "SELECT 
                    YEAR(created_at) AS getYear,
                    SUM(doctor_charges + grand_total) AS total
                FROM
                    invoice_details
                GROUP BY getYear
                ORDER BY getYear ASC";
        $invoiceDetails = DB::select($sql);
        return $invoiceDetails;
    }
}
