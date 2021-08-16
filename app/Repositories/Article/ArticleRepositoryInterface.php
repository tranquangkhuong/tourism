<?php

namespace App\Repositories\Article;

use App\Repositories\RepositoryInterface;

interface ArticleRepositoryInterface extends RepositoryInterface
{
    public function storeArticle($request, $image, $content);
    public function getContent($articleId, $request, $imagePathInEditor);
    public function updateArticle($article_id, $title, $image, $content);
}
