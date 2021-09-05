<?php

namespace App\Repositories\Tour\Plan;

use App\Models\TourPlan;
use App\Repositories\RepositoryEloquent;

class TourPlanRepositoryEloquent extends RepositoryEloquent implements TourPlanRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\TourPlan::class;
    }

    public function store($request)
    {
        $data = $request->all();
        $day = $data['day'];
        foreach ($day as $key => $value) {
            TourPlan::create([
                'tour_id' => $data['tour_id'],
                'day' => $value,
                'content' => $data['content'][$key],
                'note' => $data['note'][$key],
            ]);
        }
        // dd($name);
    }

    public function actionStore($name, $content, $note)
    {
        dd($name, $content, $note);
    }
}
