<?php

namespace App\Repositories\Tour\Image;

use App\Repositories\RepositoryInterface;

interface TourImageRepositoryInterface extends RepositoryInterface
{
    public function getImageTour($tourId);
}
