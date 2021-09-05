<?php

namespace App\Repositories\Tour\Plan;

use App\Repositories\RepositoryInterface;

interface TourPlanRepositoryInterface extends RepositoryInterface
{
    public function actionStore($name, $content, $note);
}
