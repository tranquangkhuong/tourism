<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::guard('web')->attempt([
            'email' => $email,
            'password' => $password,
            'is_admin' => 1,
        ])) {
            return redirect()->route('admin.dashboard');
        }

        if (Auth::guard('web')->attempt([
            'email' => $email,
            'password' => $password,
            'is_admin' => 0,
        ])) {
            return redirect()->route('home');
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
}
