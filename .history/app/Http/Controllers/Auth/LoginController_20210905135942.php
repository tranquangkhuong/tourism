<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;
        // $remember = false;

        // if ($request->remember === 1) {
        //     $remember = true;
        // }

        if (Auth::guard('user')->attempt([
            'email' => $email,
            'password' => $password,
            'is_admin' => 1,
        ], $request->remember)) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        if (Auth::guard('user')->attempt([
            'email' => $email,
            'password' => $password,
            'is_admin' => 0,
        ], $request->remember)) {
            $request->session()->regenerate();
            toast(__('Welcome back.'), 'success')->position('top');
            return redirect()->intended('/');
        }

        return back()->withErrors(__('auth.failed'))->withInput();

        /**
         * * Hien thi loi tren View
         * @if (session('errors'))
         *<div class="alert alert-danger">
         *    {{ session('status') }}
         *</div>
         *@endif
         */
    }

    public function logout(Request $request)
    {
        if (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            toast(__('You are logged out.'), 'warning');

            return redirect()->intended('/');
        } else {
            Alert::error(__('Error.'), __('You are not logged in yet.'));
            return redirect()->intended('/');
        }
    }
}
