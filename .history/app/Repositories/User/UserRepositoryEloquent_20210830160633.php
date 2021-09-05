<?php

namespace App\Repositories\User;

use App\Models\Booking;
use App\Models\User;
use App\Repositories\RepositoryEloquent;
use Illuminate\Support\Facades\Hash;

class UserRepositoryEloquent extends RepositoryEloquent implements UserRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\User::class;
    }

    public function getBooking($userId)
    {
        return $this->find($userId)->bookings()->get();
        DB::table('booking_details')->select('tours.name', 'booking_details.other_day', 'booking_details.total_slot', 'booking_details.total_price')->join('tours', 'booking_details.tour_id', '=', 'tours.id')
    }

    public function store($request)
    {
        $emailCheck = $this->_model->where('email', $request->email)->count();

        if ($emailCheck > 0) {
            return [
                'title' => __('An error has occurred!'),
                'msg' => __('Email already exists.'),
                'stt' => self::STATUS_ERROR,
            ];
        }

        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = 1;
        $user->save();

        return [
            'title' => __('Done!'),
            'msg' => __('Add user successfully.'),
            'stt' => self::STATUS_SUCCESS,
        ];
    }

    public function update($request, $id)
    {
        $this->_model->find('id', $id)->update([
            ''
        ])
    }

    public function updatePassword($request, $id)
    {
        $pwd = $request->password;
        $newPwd = $request->new_password;
        $rePwd = $request->re_new_password;
        $currentPwd = $this->_model->select('password')->where('id', $id)->first()->password;

        if (!Hash::check($pwd, $currentPwd)) {
            return [
                'title' => __('An error has occurred!'),
                'msg' => __('password.incorrect'),
                'stt' => self::STATUS_ERROR,
            ];
        }

        if (strcmp($newPwd, $rePwd) != 0) {
            return [
                'title' => __('An error has occurred!'),
                'msg' => __('password.renew.incorrect'),
                'stt' => self::STATUS_ERROR,
            ];
        }

        $this->_model->find($id)->update([
            'password' => Hash::make($newPwd)
        ]);

        return [
            'title' => __('Done!'),
            'msg' => __('password.change_success'),
            'stt' => self::STATUS_SUCCESS,
        ];
    }
}
