<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Showth;
use Illuminate\Support\Facades\Http;

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

    public function coming(){
        $response = Http::get('https://gutendex.com/books/?ids=11,12,13');
        $trailers = $response->json();
        return view('articles.soon', ['trailers'=>$trailers]);
    }

}
