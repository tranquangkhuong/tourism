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
        $name[] = array_map('actionStore', $request->input('name'));

        dd($name);
    }

    public function actionStore()
    {
        dd()
    }
}
