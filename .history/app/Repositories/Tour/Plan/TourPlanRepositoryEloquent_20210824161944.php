<?php

namespace App\Repositories\Tour\Plan;

use App\Repositories\RepositoryEloquent;

class TourPlanRepositoryEloquent extends RepositoryEloquent implements TourPlanRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\TourPlan::class;
    }

    public function store($request)
    {
        $name[] = array_map(,$request->input('name'));
        function FunctionName(Type $var = null)
        {
            # code...
        }
        dd($name);
    }
}
