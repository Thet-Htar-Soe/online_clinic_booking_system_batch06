<?php

namespace App\Services\Admin;

use App\Contracts\Dao\Admin\AdminDaoInterface;
use App\Contracts\Services\Admin\AdminServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for admin
 */
class AdminServices implements AdminServiceInterface
{
    /**
     * admin dao
     */
    private $adminDao;

    /**
     * Class Constructor
     * @param adminDaoInterface
     */
    public function __construct(AdminDaoInterface $adminDao)
    {
        $this->adminDao = $adminDao;
    }
}
