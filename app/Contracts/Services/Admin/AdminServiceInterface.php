<?php

namespace App\Contracts\Services\Admin;

use App\Http\Requests\UpdateAdminRequest;

/**
 * Interface for admin service
 */
interface AdminServiceInterface
{
    /**
     * To show admin detail by id
     * @param string $id admin id
     */
    public function show($id);
    /**
     * To edit admin by id
     * @param string $id admin id
     * * @return Object $admin saved admin
     */
    public function edit($id);
    /**
     * To update admin by id
     * @param UpdateAdminRequest $request request with inputs
     * @param string $id admin id
     * @return Object $admin Admin Object
     */
    public function update($request, $id);

    /**
     * To delete admin by id
     * @param string $id admin id
     * @param string $id deleted admin id
     */
    public function destroy($id);
}
