<?php

namespace App\Contracts\Services\Dashboard;

use Illuminate\Http\Request;

/**
 * Interface for dashboard service
 */
interface DashboardServiceInterface
{
    /**
     * To show weekly incomes bar chart
     * 
     * @return View components.barcharts.weekly
     */
    public function weekly();

    /**
     * To show monthly incomes bar chart
     * 
     * @return View components.barcharts.monthly
     */
    public function monthly();

    /**
     * To show yearly incomes bar chart
     * 
     * @return View components.barcharts.yearly
     */
    public function yearly();
}
