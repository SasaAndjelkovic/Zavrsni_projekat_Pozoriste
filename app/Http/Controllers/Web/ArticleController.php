<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Showth;

class ArticleController extends Controller
{
    public function index() 
    {
        $articles = Showth::paginate(10);
        return view('articles.index')
            ->with(['articles' => $articles]);
    }

    public function show(Article $article) 
    {
       return view('articles.userreport')->with([
             'article' => $article
        ]);
    }

}
