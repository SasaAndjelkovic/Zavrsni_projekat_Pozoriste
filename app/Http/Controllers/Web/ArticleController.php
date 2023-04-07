<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() 
    {
        $articles = Article::paginate(10);
        return view('articles.index')
            ->with(['articles' => $articles]);
    }

    public function show(Article $article) 
    {
        return view('shop.show')->with([
            'article' => $article
        ]);
    }
}
