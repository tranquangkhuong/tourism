<?php

namespace App\Repositories\Article;

use App\Models\Article;
use App\Repositories\RepositoryEloquent;

class ArticleRepositoryEloquent extends RepositoryEloquent implements ArticleRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Article::class;
    }

    public function store($request)
    {
        $imagePath = 'Cho nay xu ly de lay duong dan cua anh';
        $content = 'Xu ly anh qua editor';

        $article = new Article();
        $article->user_id = $request->user_id;
        $article->title = $request->title;
        if ($request->hasFile('image')) {
            $article->image = $imagePath;
        }
        $article->content = $content;
        $article->save();
    }
}
