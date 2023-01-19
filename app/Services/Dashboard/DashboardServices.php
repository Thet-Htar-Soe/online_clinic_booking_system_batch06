<?php

namespace App\Services\Dashboard;

use App\Contracts\Dao\Dashboard\DashboardDaoInterface;
use App\Contracts\Services\Dashboard\DashboardServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for dashboard
 */
class DashboardServices implements DashboardServiceInterface
{
    /**
     * dashboard dao
     */
    private $dashboardDao;

    /**
     * Class Constructor
     * @param dashboardDaoInterface
     */
    public function __construct(DashboardDaoInterface $dashboardDao)
    {
        $this->dashboardDao = $dashboardDao;
    }

    /**
     * To show weekly incomes bar chart
     * 
     * @return View components.barcharts.weekly
     */
    public function weekly()
    {
        return $this->dashboardDao->weekly();
    }

    /**
     * To show monthly incomes bar chart
     * 
     * @return View components.barcharts.monthly
     */
    public function monthly()
    {
        return $this->dashboardDao->monthly();
    }

    /**
     * To show yearly incomes bar chart
     * 
     * @return View components.barcharts.yearly
     */
    public function yearly()
    {
        return $this->dashboardDao->yearly();
    }
}
