<?php

namespace App\Dao\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateAdminRequest;
use App\Contracts\Dao\Admin\AdminDaoInterface;


/**
 * Data accessing object for admin
 */
class AdminDao implements AdminDaoInterface
{
    /**
     * To show admin detail by id
     * @param string $id admin id
     */
    public function show($id)
    {
        $admin = Admin::where('id', $id)->firstOrFail();
        return $admin;
    }
    /**
     * To edit admin by id
     * @param string $id admin id
     * * @return Object $admin saved admin
     */
    public function edit($id)
    {
        $admin = Admin::where('id', $id)->firstOrFail();
        return $admin;
    }
    /**
     * To update admin by id
     * @param UpdateAdminRequest $request request with inputs
     * @param string $id admin id
     * @return Object $admin Admin Object
     */
    public function update($request, $id)
    {
        Admin::where('id', $id)->update([
            'name' => request()->name,
            'email' => request()->email,
        ]);
    }

    /**
     * To delete admin by id
     * @param string $id admin id
     * @param string $id deleted admin id
     */
    public function destroy($id)
    {
       Admin::where('id', $id)->delete();
    }

    /**
     * To submit admin login 
     * @param $request
     * @return View admins 
     */
    public function login($request)
    {
        $admin = Admin::where('email', $request->email)->first();
        if(collect($admin)->isNotEmpty()){
            if (Hash::check($request->password, $admin->password)) {
                return $admin;
            }
        }
    }
}
