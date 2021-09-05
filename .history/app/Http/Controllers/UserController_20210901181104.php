<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
     * @return int user_id
     */
    public static function id()
    {
        return Auth::guard('user')->id();
    }

    /*
    |-------------------------------------------------------------------
    | Ham xu li users cho Admin.
    |-------------------------------------------------------------------
    */

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $users = $this->repo->getAll(['id', 'name', 'email', 'avatar_image_path', 'profile_photo_path']);

        return view('admin.user.index', compact('users'));
    }

    /**
     * Display the specified resource.
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rs = $this->repo->destroy($this->id());
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('admin.user_index');
    }

    /*
    |-------------------------------------------------------------------
    | Ham xu li users cho Customer, tren trang front.
    |-------------------------------------------------------------------
    */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function profile()
    {
        $user = $this->repo->show(static::id());

        return view('test.user_profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $imagePath = $this->repo->uploadImage($request->hasFile('image'), $request->file('image'), $this->id() . '/');
        $rs = $this->repo->update($request, $this->id());
        toast($rs['msg'], $rs['stt']);

        return back();
    }

    /**
     * User password update.
     *
     * @param \Illuminate\Http\PasswordRequest  $request
     * @return array
     */
    public function updatePassword(PasswordRequest $request)
    {
        $rs = $this->repo->updatePassword($request, static::id());
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('user.profile');
    }

    /**
     * Lấy các đơn booking tour của User.
     */
    public function getBooking()
    {
        $this->repo->getBooking($this->id());
    }

    /**
     * Xu li Notification.
     */
    public function getNotification()
    {
        // $user = \App\Models\User::find(Auth::guard('user')->id())->notifications();
        return response()->json(auth('user')->user()->notifications);
    }

    public function markAsReadAll()
    {
        auth('user')->user()->unreadNotifications->markAsRead();

        return response()->json();
    }

    public function markAsRead($notificationId)
    {
        auth('user')->user()->unreadNotifications()->find($notificationId)->markAsRead();
    }
}
