<?php

namespace App\Repositories\Tour\Image;

use App\Repositories\RepositoryEloquent;

class TourImageRepositoryEloquent extends RepositoryEloquent implements TourImageRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\TourImage::class;
    }

    public function getImageTour($tourId)
    {
        return $this->_model->where('tour_id', $tourId)->get();
    }
}
