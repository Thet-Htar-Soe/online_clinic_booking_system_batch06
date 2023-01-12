<?php

namespace App\Dao\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Contracts\Dao\Admin\AdminDaoInterface;

/**
 * Data accessing object for admin
 */
class AdminDao implements AdminDaoInterface
{
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
        $admin = Admin::where('id', $id)->firstOrFail();
        return $admin;
    }
}
