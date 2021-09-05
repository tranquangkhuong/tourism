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

    public function getAll($columns = ['*'])
    {
        // if (is_array($columns)) {
        //     $columns = implode(',', $columns);
        // }
        return $this->_model->select($columns)->join('areas', 'locations.area_id', '=', 'areas.id')->get();
    }
}
