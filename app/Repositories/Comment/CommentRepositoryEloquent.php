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
        $comment = new Comment();
        $comment->tour_id = $request->tour_id;
        $comment->user_id = $request->user_id;
        $comment->content = $request->content;
        $comment->save();
    }
}
