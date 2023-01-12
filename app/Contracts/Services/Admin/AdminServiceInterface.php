<?php

namespace App\Contracts\Services\Admin;

use Illuminate\Http\Request;

/**
 * Interface for admin service
 */
interface AdminServiceInterface
{
    /**
     * To show create admin view
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
