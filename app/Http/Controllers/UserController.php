<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    protected $repo;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->repo = $userRepository;
    }

    /**
     * Get user id.
     *
     * *ADMIN
     */
    public function id()
    {
        return Auth::guard('web')->id();
    }

    /**
     * Display a listing of the resource.
     *
     * * ADMIN
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->repo->getAll();

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * * ADMIN
     *
     * @return View
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * * ADMIN
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rs = $this->repo->store($request);
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.user_index');
    }

    /**
     * Display the specified resource.
     *
     * * ADMIN
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        $user = $this->repo->show($this->id());

        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * * CLIENT
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->repo->show($this->id());

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * * CLIENT
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rs = $this->repo->update($request, $this->id());
        Alert::alert($rs['title'], $rs['msg'], $rs['type']);

        return back();
    }

    /**
     * User password update.
     *
     * * CLIENT
     *
     * @param \Illuminate\Http\Request  $request
     * @return array
     */
    public function updatePassword(Request $request)
    {
        $rs = $this->repo->updatePassword($request, $this->id());
        // alert($rs['msg'], $rs['type']);
        Alert::alert($rs['title'], $rs['msg'], $rs['type']);

        return redirect()->route('change_password');
    }

    /**
     * Remove the specified resource from storage.
     *
     * * ADMIN
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rs = $this->repo->destroy($this->id());
        toast($rs['msg'], $rs['type']);

        return redirect()->route('admin.user_index');
    }

    /**
     * Search for users by name.
     *
     * * ADMIN
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $users = $this->repo->search('name', $request->keyword);

        return response()->json($users);
    }
}
