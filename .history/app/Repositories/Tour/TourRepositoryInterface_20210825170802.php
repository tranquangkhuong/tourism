<?php

namespace App\Repositories\Tour;

use App\Repositories\RepositoryInterface;

interface TourRepositoryInterface extends RepositoryInterface
{
    public function getAllArea();
    public function getAllLocation();
    public function getAllPromotion();
    public function getAllTag();
    public function getAllVehicle();
    public function getIncludeId();
    public function getNotIncludeId();
    public function getTourInclude();
    public function getTourNotInclude();
}
