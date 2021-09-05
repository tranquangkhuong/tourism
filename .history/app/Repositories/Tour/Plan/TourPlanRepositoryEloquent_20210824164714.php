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
        $name = $request->name;
        $content = $request->content;
        $note = $request->note;
        foreach ($name as $key => $value) {
            echo 'Luu name la: ' . $value . '<br/>Voi noi dung: ' . $content[$key] . '<br/>Va ghi chu: ' . $note[$key];
        }
        // dd($name);
    }

    public function actionStore($name, $content, $note)
    {
        dd($name, $content, $note);
    }
}
