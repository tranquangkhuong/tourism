<?php

namespace App\Repositories\Booking;

use App\Events\CustomerBooking;
use App\Models\Booking;
use App\Models\Tour;
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
        return Tour::find($tourId)->promotions()->get();
    }

    public function store($request)
    {
        $booking = new Booking();
        $booking->user_id = $request->user_id;
        $booking->payment_id = $request->payment_id;
        $booking->code = $request->code;
        $booking->status = $request->status;
        $booking->save();

        DB::table('booking_details')->create([
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
        // event tao notification
    }

    public function sendEmailBooking()
    {
        # code...
        // gui mail (goi event de thuc hien)
        // event(new CustomerBooking($booking));
    }
}
