<?php

namespace App\Repositories\Article;

use App\Models\Article;
use App\Repositories\RepositoryEloquent;

class ArticleRepositoryEloquent extends RepositoryEloquent implements ArticleRepositoryInterface
{
    protected $path = '/storage/images/articles/';

    public function getModel()
    {
        return \App\Models\Article::class;
    }

    /**
     * Luu bai viet.
     */
    public function storeArticle($request, $image, $content)
    {
        try {
            $article = new Article();
            // $article->user_id = $request->user_id;
            $article->title = $request->title;
            if ($image) {
                $article->image_path = $image;
            }
            $article->content = $content;
            $article->created_at = now();
            $article->save();

            return [
                'msg' => __('Save successfully.'),
                'type' => self::TYPE_SUCCESS,
            ];
        } catch (\Throwable $th) {
            //throw $th;
            return [
                'msg' => __('Save failed.'),
                'type' => self::TYPE_ERROR,
            ];
        }
    }

    /**
     * Lay noi dung trong Editor moi (sau khi kiem tra va upload anh moi len).
     */
    public function getContent($articleId, $dataEditor, $imagePathInEditor)
    {
        return $this->getDataFromEditor($dataEditor, $imagePathInEditor, $this->find($articleId)->content);
    }

    /**
     * Cap nhat bai viet.
     */
    public function updateArticle($articleId, $title, $image, $content)
    {
        try {
            $article = $this->find($articleId);
            $article->title = $title;
            if ($image) {
                $article->image = $image;
            }
            $article->content = $content;
            $article->updated_at = date('Y-m-d H:i:s');
            $article->save();

            return [
                'msg' => __('Update a successful article.'),
                'type' => self::TYPE_SUCCESS,
            ];
        } catch (\Throwable $th) {
            // throw $th;
            return [
                'msg' => __('Update a failed article.'),
                'type' => self::TYPE_ERROR,
            ];
        }
    }
}
