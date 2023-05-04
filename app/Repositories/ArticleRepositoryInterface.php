<?php

namespace App\Repositories;

interface ArticleRepositoryInterface
{
    public function updateArticle($request, $userId, $articleId);

    public function getArticleById($articleId);


}
