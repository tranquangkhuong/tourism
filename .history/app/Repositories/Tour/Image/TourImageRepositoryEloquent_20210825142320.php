<?php

namespace App\Repositories\Tour\Image;

use App\Repositories\RepositoryEloquent;

class TourImageRepositoryEloquent extends RepositoryEloquent implements TourImageRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\TourImage::class;
    }

    public function get(Type $var = null)
    {
        # code...
    }
}
