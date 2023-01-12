<?php

namespace App\Contracts\Dao\Admin;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of admin
 */
interface AdminDaoInterface
{
    /**
     * To show admin view
     * 
     * @return View admins
     */
    public function index();

    /**
     * To show admin by id
     * @return View admin
     */
    public function show($id);
}
