<?php

namespace App\Repositories\Admin;

use App\Repositories\RepositoryEloquent;

class AdminRepositoryEloquent extends RepositoryEloquent implements AdminRepositoryInterface
{
    public function setModel()
    {
        return \App\Models\Admin::class;
    }
}
