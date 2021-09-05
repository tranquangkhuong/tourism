<?php

namespace App\Repositories\Booking;

use App\Events\CustomerBooking;
use App\Models\Booking;
use App\Repositories\RepositoryEloquent;
use Illuminate\Support\Facades\DB;

class BookingRepositoryEloquent extends RepositoryEloquent implements BookingRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Booking::class;
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
        ]);

        DB::table('booking_price')->create([
            'booking_id' => $booking->id,
            'tour_id' => $request->tour_id,
            'adult_slot' => $request->adult_slot,
            'youth_slot' => $request->adult_slot,
            'child_slot' => $request->adult_slot,
            'young_child_slot' => $request->adult_slot,
            'adult_price' => $request->adult_slot,
            'youth_price' => $request->adult_slot,
            'child_price' => $request->adult_slot,
            'young_child_price' => $request->adult_slot,
        ]);
    }

    public function sendEmailBooking()
    {
        # code...
        // gui mail (goi event de thuc hien)
        event(new CustomerBooking($booking));
    }
}
