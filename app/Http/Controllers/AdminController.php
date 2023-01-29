<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Admin\AdminServiceInterface;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    private $adminInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdminServiceInterface $adminServiceInterface)
    {
        $this->adminInterface = $adminServiceInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = $this->adminInterface->show($id);
        return view('admin.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = $this->adminInterface->edit($id);
        return view('admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, $id)
    {
        $this->adminInterface->update($request, $id);
        Alert::toast('Successfully updated your information!', 'success')->position('bottom-end');
        return redirect()->route('admin.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->adminInterface->destroy($id);
        Session::flush();
        Alert::alert()->success('Success!', 'Successfully delected your account!')->autoClose(1500);
        return redirect('/admin_signup');
    }
}
