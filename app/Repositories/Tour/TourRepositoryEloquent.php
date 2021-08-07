<?php

namespace App\Repositories\Tour;

use App\Repositories\RepositoryEloquent;

class TourRepositoryEloquent extends RepositoryEloquent implements TourRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Tour::class;
    }
}
