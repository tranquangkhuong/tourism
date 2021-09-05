<?php

namespace App\Repositories\Promotion;

use App\Models\Tour;
use App\Repositories\RepositoryEloquent;

class PromotionRepositoryEloquent extends RepositoryEloquent implements PromotionRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Promotion::class;
    }
}
