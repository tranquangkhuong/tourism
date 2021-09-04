<?php

namespace App\Repositories\Location;

use App\Models\Area;
use App\Repositories\RepositoryEloquent;

class LocationRepositoryEloquent extends RepositoryEloquent implements LocationRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Location::class;
    }

    public function getAllArea()
    {
        return Area::all();
    }

    public function search($locationName, $areaId)
    {
        $result = $this->_model;
        if ($locationName) {
            $result->where('name', 'like', '%' . $locationName . '%');
        }
        if ($areaId) {
            $result->where('area_id', $areaId);
        }
        $result->orderBy('name')->get();

        return $result;
    }
}
