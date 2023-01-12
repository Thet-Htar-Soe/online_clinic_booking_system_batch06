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
     * @return
     */
    public function __construct(AdminDaoInterface $adminDao)
    {
        $this->adminDao = $adminDao;
    }

    /**
     * To show create admin view
     * 
     * @return View admins
     */
    public function index()
    {

    }

    /**
     * To show admin by id
     * @return View admins
     */
    public function show($id)
    {
        return $this->adminDao->show($id);
    }


}
