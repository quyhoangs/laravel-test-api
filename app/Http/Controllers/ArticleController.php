<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use DB;

class ArticleController extends Controller
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function update()
    {
        $article = $this->articleRepository->updateArticle($request, $userId, $articleId);
        return response()->json($article, 200);
    }

    // test connect oracle
    public function testOracleConnection()
    {
         $products = DB::select('select * from Product');
            dd($products);
    }

    // Các phương thức CRUD khác cho Article model tại đây
}
