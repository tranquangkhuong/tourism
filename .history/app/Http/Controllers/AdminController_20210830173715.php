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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = $this->repo->getAll();

        return view('admin.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dung modal
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

        return redirect()->
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

    public function changePassword()
    {
        return view('admin.change_password');
    }

    public function updatePassword(Request $request)
    {
        $rs = $this->repo->updatePassword($request, static::id());
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('user.profile');
    }
}
