<?php

namespace App\Repositories\Booking;

use App\Events\CustomerBooking;
use App\Models\Booking;
use App\Models\Promotion;
use App\Models\Tour;
use App\Models\User;
use App\Notifications\SendNotificationToCustomers;
use App\Repositories\RepositoryEloquent;
use Illuminate\Support\Facades\DB;

class BookingRepositoryEloquent extends RepositoryEloquent implements BookingRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Booking::class;
    }

    public function getTour($tourId)
    {
        return Tour::find($tourId)->first();
    }

    public function getPromotion($tourId)
    {
        return Tour::find($tourId)->promotion()->first();
    }

    public function getBookingDetail($code)
    {
        $booking = $this->_model->where('code', $code)->first();
        $bookingDetail = DB::table('booking_details')->where('booking_id', $booking->id)->first();
        $data = [
            'name' => $booking->user()->name,
            'email' => $booking->user()->email,
            'code' => $booking->code,
            'tour' => $this->getTour($bookingDetail->tour_id)->name,
            'promotion' => Promotion::find($bookingDetail->promotion_id)->first()->name,
            'payment' => $booking->payment()->name,
            'status' => $booking->status,
            'date' => $bookingDetail->other_day,
            'adult_slot' => $bookingDetail->adult_slot,
            'adult_price' => $bookingDetail->adult_price,
            'youth_slot' => $bookingDetail->youth_slot,
            'youth_price' => $bookingDetail->youth_price,
            'child_slot' => $bookingDetail->child_slot,
            'child_price' => $bookingDetail->child_price,
            'baby_slot' => $bookingDetail->baby_slot,
            'baby_price' => $bookingDetail->baby_price,
            'total_slot' => $bookingDetail->total_slot,
            'total_price' => $bookingDetail->total_price,
            'created_at' => $booking->created_at,
        ];

        return $data;
    }

    public function store($request)
    {
        $booking = $this->_model->create([
            'user_id' => $request->user_id,
            'payment_id' => $request->payment_id,
            'code' => $request->code,
            'status' => $request->status,
        ]);

        $bookingDetail = DB::table('booking_details')->create([
            'booking_id' => $booking->id,
            'tour_id' => $request->tour_id,
            'promotion_id' => $request->promotion_id,
            'other_day' => $request->other_day,
            'adult_slot' => $request->adult_slot,
            'adult_price' => $request->adult_price,
            'youth_slot' => $request->youth_slot,
            'youth_price' => $request->youth_price,
            'child_slot' => $request->child_slot,
            'child_price' => $request->child_price,
            'baby_slot' => $request->baby_slot,
            'baby_price' => $request->baby_price,
            'total_slot' => $request->total_slot,
            'total_price' => $request->total_price,
        ]);

        // event gui mail
        $data = [
            'email' => $booking->user()->email,
            'code' => $booking->code,
            'tour' => $this->getTour($bookingDetail->tour_id)->name,
            'promotion' => Promotion::find($bookingDetail->promotion_id)->first()->name,
            'payment' => $booking->payment()->name,
            'status' => $booking->status,
            'date' => $bookingDetail->other_day,
            'adult_slot' => $bookingDetail->adult_slot,
            'adult_price' => $bookingDetail->adult_price,
            'youth_slot' => $bookingDetail->youth_slot,
            'youth_price' => $bookingDetail->youth_price,
            'child_slot' => $bookingDetail->child_slot,
            'child_price' => $bookingDetail->child_price,
            'baby_slot' => $bookingDetail->baby_slot,
            'baby_price' => $bookingDetail->baby_price,
            'total_slot' => $bookingDetail->total_slot,
            'total_price' => $bookingDetail->total_price,
            'created_at' => $booking->created_at,
        ];
        // event gui mail booking
        event(new CustomerBooking($data));

        $dataNotify = [
            'type'
            'data' => 'You have successfully booked the tour'
        ]
        // tao notification
        User::find($request->user_id)->notify(new SendNotificationToCustomers($data));
        // Notification::send($user, new SendNotificationToCustomers($data));

        // lay tat ca thong bao theo user_id
        $user = \App\Models\User::find($user_id);
        // danh dau tat ca thong bao cua doc thanh da doc.
        $user->unreadNotifications->markAsRead();
        // xoa thong bao tat ca thong bao
        $user->notifications()->delete();
        foreach ($user->notifications as $notification) {
            // noi dung thong bao
            echo $notification->data;
            // danh dau da doc (tung thong bao mot)
            $notification->markAsRead();
            // xoa thong bao
            $notification->delete();
        }
    }
}
