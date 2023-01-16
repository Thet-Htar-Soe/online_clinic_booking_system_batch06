<?php

namespace App\Services\Admin;

use App\Contracts\Dao\Admin\AdminDaoInterface;
use App\Contracts\Services\Admin\AdminServiceInterface;
use App\Http\Requests\UpdateAdminRequest;

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
     * To show admin detail by id
     * @param string $id admin id
     */
    public function show($id)
    {
        return $this->adminDao->show($id);
    }
    /**
     * To edit admin by id
     * @param string $id admin id
     * * @return Object $admin saved admin
     */
    public function edit($id)
    {
        return $this->adminDao->edit($id);
    }

    /**
     * To update admin by id
     * @param UpdateAdminRequest $request request with inputs
     * @param string $id admin id
     * @return Object $admin Admin Object
     */
    public function update($request, $id)
    {
        return $this->adminDao->update($request, $id);
    }

    /**
     * To delete admin by id
     * @param string $id admin id
     * @param string $id deleted admin id
     */
    public function destroy($id)
    {
        return $this->adminDao->destroy($id);
    }
}
