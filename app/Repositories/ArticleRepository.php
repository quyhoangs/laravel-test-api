<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository extends BaseRepository implements ArticleRepositoryInterface
{
    public function __construct(Article $article)
    {
        dump('ArticleRepository');
        parent::__construct($article);
    }

    // Triển khai các phương thức chức năng cụ thể cho Article model tại đây
    public function updateArticle($request, $userId, $articleId)
    {
        $article = $this->model->where('id', $articleId)->where('user_id', $userId)->firstOrFail();
        $article->update($request->all());
        return $article;
    }

    public function getArticleById($articleId)
    {
        $article = $this->model->where('id', $articleId)->firstOrFail();
        return $article;
    }

}
