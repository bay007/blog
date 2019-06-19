<?php

namespace App\Http\Controllers;

use App\Article;

class TestController extends Controller
{
    public function view($article_id)
    {
        $article = Article::find($article_id);

        return view('article_detail', ['article' => $article]);

    }
}
