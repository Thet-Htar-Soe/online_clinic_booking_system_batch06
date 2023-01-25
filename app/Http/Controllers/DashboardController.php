<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Dashboard\DashboardServiceInterface;
use DateTime;

class DashboardController extends Controller
{
    /**
     * dashboard interface 
     * */
    private $dashboardInterface;

    /**
     * Create a new controller instance.
     */
    public function __construct(DashboardServiceInterface $dashboardServiceInterface)
    {
        $this->dashboardInterface = $dashboardServiceInterface;
    }

    /**
     * To show weekly incomes bar chart
     * 
     * @return View components.barcharts.weekly
     */
    public function weekly()
    {
        $invoiceDetails = $this->dashboardInterface->weekly();
        $labels = [];
        for ($i = 0; $i < count($invoiceDetails); $i++) {
            $getDateNumber = $invoiceDetails[$i]->getDate;
            $labels[] = $getDateNumber;
        }
        $datas = [];
        for ($j = 0; $j < count($invoiceDetails); $j++) {
            $forTotal = $invoiceDetails[$j]->total;
            $datas[] = $forTotal;
        }
        return view("components.barcharts.weekly", compact("labels", "datas"));
    }

    /**
     * To show monthly incomes bar chart
     * 
     * @return View components.barcharts.monthly
     */
    public function monthly()
    {
        $invoiceDetails = $this->dashboardInterface->monthly();
        $labels = [];
        for ($i = 0; $i < count($invoiceDetails); $i++) {
            $getMonthNumber = $invoiceDetails[$i]->getMonth;
            $dateObj   = DateTime::createFromFormat('!m', $getMonthNumber);
            $monthName = $dateObj->format('F');
            $labels[] = $monthName;
        }
        $datas = [];
        for ($j = 0; $j < count($invoiceDetails); $j++) {
            $forTotal = $invoiceDetails[$j]->total;
            $datas[] = $forTotal;
        }
        return view("components.barcharts.monthly", compact("labels", "datas"));
    }

    /**
     * To show yearly incomes bar chart
     * 
     * @return View components.barcharts.yearly
     */
    public function yearly()
    {
        $invoiceDetails = $this->dashboardInterface->yearly();
        $labels = [];
        for ($i = 0; $i < count($invoiceDetails); $i++) {
            $getYearNumber = $invoiceDetails[$i]->getYear;
            $labels[] = $getYearNumber;
        }
        $datas = [];
        for ($j = 0; $j < count($invoiceDetails); $j++) {
            $forTotal = $invoiceDetails[$j]->total;
            $datas[] = $forTotal;
        }
        return view("components.barcharts.yearly", compact("labels", "datas"));
    }
}
