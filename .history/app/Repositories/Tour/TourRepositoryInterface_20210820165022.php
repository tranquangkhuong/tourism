<?php

namespace App\Repositories\Tour;

use App\Repositories\RepositoryInterface;

interface TourRepositoryInterface extends RepositoryInterface
{
    public function getAllArea();
    public function getAllLocation();
    public function getAllPromotion();
    // public function storeTour($request);
    public function storeTourDetail($request);
    public function updateTourDetail($request, $id);
}
