<?php

namespace App\Repositories\Comment;

use App\Models\Comment;
use App\Repositories\RepositoryEloquent;

class CommentRepositoryEloquent extends RepositoryEloquent implements CommentRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Comment::class;
    }

    public function store($request)
    {
        try {
            Comment::create($request->all());
            return [
                'title' => __('Done!'),
                'stt' => self::STATUS_SUCCESS,
            ]; //code...
        } catch (\Throwable $th) {
            return [
                'title' => __('An error has occured!'),
                'stt' => self::STATUS_ERROR,
            ];
        }
    }
}
