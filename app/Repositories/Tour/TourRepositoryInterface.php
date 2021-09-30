<?php

namespace App\Repositories\Tour;

use App\Repositories\RepositoryInterface;

interface TourRepositoryInterface extends RepositoryInterface
{
    public function getIncludeId();
    public function getNotIncludeId();
    public function getTourInclude($tourId);
    public function getTourNotInclude($tourId);
}
