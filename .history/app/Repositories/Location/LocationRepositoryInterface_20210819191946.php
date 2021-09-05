<?php

namespace App\Repositories\Location;

use App\Repositories\RepositoryInterface;

interface LocationRepositoryInterface extends RepositoryInterface
{
    public function getAllArea();
    // public function search($locationName = null, $areaId = null);
}
