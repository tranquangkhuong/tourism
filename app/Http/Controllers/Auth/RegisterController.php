<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        // check email
        $emailCheck = User::select('email')->where('email', $email)->count();
        if ($emailCheck > 0) {
            return back()->with(self::TYPE_ERROR, __('Email already exists.'))->withInput();
        }
        // create new user
        $user = new User();
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->created_at = date('Y-m-d H:i:s');
        $user->save();

        return back()->with(self::TYPE_SUCCESS, __('Register successfully.'));
    }
}
