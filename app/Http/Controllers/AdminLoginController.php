<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Admin\AdminServiceInterface;
use App\Http\Requests\LoginAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
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
        if(!session()->has('admin'))
        {
            return view('admin.login');
        }
        return redirect()->back();
    }

    /**
     * Show the form for admin login.
     * @param  \App\Http\Requests\LoginAdminRequest $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginAdminRequest $request)
    {
        $email = Admin::where('email', $request->email)->first();
        if ($email) {
            if (!Hash::check($request->password, $email->password)) {
                return back()->with('info', 'Password Wrong!');
            }
        }
        $admin = $this->adminInterface->login($request);
        if ($admin) {
            if (!session()->has('admin')) {
                Session::put('admin', $admin);
            }
            return redirect()->route('doctor.index');
        } else {
            return back()->with('doesNotMatch', 'This Account Does not Match With Our Record. Please Try Again!');
        }
    }

    /**
     * Logout admins.
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session::flush();
        return redirect()->route('admin.signup');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
