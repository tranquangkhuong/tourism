<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\RepositoryEloquent;
use Illuminate\Support\Facades\Hash;

class UserRepositoryEloquent extends RepositoryEloquent implements UserRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\User::class;
    }

    public function store($request)
    {
        $emailCheck = $this->_model->where('email', $request->email)->count();

        if ($emailCheck > 0) {
            return [
                'msg' => __('Email already exists.'),
                'type' => self::TYPE_ERROR,
            ];
        }

        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = 1;
        $user->save();

        return [
            'msg' => __('Add user successfully.'),
            'type' => self::TYPE_SUCCESS,
        ];
    }

    public function updatePassword($request, $id)
    {
        $pwd = $request->password;
        $newPwd = $request->new_password;
        $rePwd = $request->re_new_password;
        $currentPwd = $this->_model->select('password')->where('id', $id)->first()->password;

        if (!Hash::check($pwd, $currentPwd)) {
            return [
                'msg' => __('Incorrect password.'),
                'type' => self::TYPE_ERROR,
            ];
        }

        if (strcmp($newPwd, $rePwd) != 0) {
            return [
                'msg' => __('Re-enter new incorrect password.'),
                'type' => self::TYPE_ERROR,
            ];
        }

        $user = $this->_model->findOrFail($id);
        $user->password = Hash::make($newPwd);
        $user->save();

        return [
            'msg' => __('Change password successfully.'),
            'type' => self::TYPE_SUCCESS,
        ];
    }
}
