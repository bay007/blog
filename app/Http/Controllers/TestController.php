<?php

namespace App\Http\Controllers;

use App\Article;

class TestController extends Controller
{
    public function view($article)
    {
        $article_ = Article::find($article);
        return ($article_);
    }
}
