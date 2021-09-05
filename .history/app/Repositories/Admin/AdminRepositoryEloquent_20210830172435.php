<?php

namespace App\Repositories\Admin;

use App\Repositories\RepositoryEloquent;

class AdminRepositoryEloquent extends RepositoryEloquent implements AdminRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Admin::class;
    }
}
