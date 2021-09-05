<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\AdminRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $repo;

    public function __construct(AdminRepositoryInterface $adminRepository)
    {
        $this->repo = $adminRepository;
    }

    /**
     * Lay id cua Admin
     */
    public function id()
    {
        return Auth::guard('admin')->id();
    }

    /*
    |---------------------------------------------------------------------------
    | Admin Manager 'admin accounts'
    |---------------------------------------------------------------------------
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = $this->repo->getAll(['id', 'name', 'email', 'avatar_image_path', 'created_at']);

        return view('admin.manage.index', compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rs = $this->repo->store($request);
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('admin.manage.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($adminId)
    {
        $admin = $this->repo->show($adminId);
        return view('admin.manage.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $adminId)
    {
        $rs = $this->repo->update($request, $adminId);
        toast($rs['msg'], $rs['stt']);

        return back();
    }

    /**
     * Block admin account.
     *
     * @param  int  $adminId
     * @return \Illuminate\Http\Response
     */
    public function block($adminId)
    {
        $rs = $this->repo->block($adminId);

        return response()->json($rs);
    }

    /**
     * UnBlock admin account.
     *
     * @param  int  $adminId
     * @return \Illuminate\Http\Response
     */
    public function unblock($adminId)
    {
        $rs = $this->repo->unblock($adminId);

        return response()->json($rs);
    }

    /*
    |---------------------------------------------------------------------------
    | Admin Profile.
    |---------------------------------------------------------------------------
    */
    /**
     * Change password for my account.
     */
    public function changePassword()
    {
        return view('admin.change_password');
    }

    /**
     * Update password for my account
     */
    public function updatePassword(Request $request)
    {
        $rs = $this->repo->updatePassword($request, static::id());
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('user.profile');
    }
}
