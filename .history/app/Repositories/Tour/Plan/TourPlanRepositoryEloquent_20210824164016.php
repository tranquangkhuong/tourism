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

        $name[] = array_map(function ($request) {
            dd($name, $content, $note);
        });
        dd($name);
    }

    public function actionStore($name, $content, $note)
    {
        dd($name, $content, $note);
    }
}
