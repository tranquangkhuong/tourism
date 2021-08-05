<?php

namespace App\Repositories\Booking;

use App\Repositories\RepositoryEloquent;

class BookingRepositoryEloquent extends RepositoryEloquent implements BookingRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Booking::class;
    }
}
