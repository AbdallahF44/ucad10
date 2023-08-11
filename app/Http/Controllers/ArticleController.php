<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
       
    public function who_we_are(){
        $article = Article::where('title','LIKE', '%Who we are%')->first();
        $title =  $article->title;

        $description =  $article->content;
        return view('site.layouts.inners.who-we-are', compact('title','description'));
    }

    public function articles(){       
       $articles = Article::where('type', 1)
        ->where('status', 1)
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();

        // $title =  $articles->title;
        // $description =  $articles->content;
        // $created_at =  $articles->created_at;
        return view('site.layouts.articles', compact('articles'));
    }
    public function index() {
        $articles = Article::where('type', 1)
        ->where('status', 1)
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();         
        return view('site.index', compact('articles'));
    }
    public function showDetails(Article $article)
    {
        return view('site.layouts.inners.article-details', compact('article'));
    }
    
    public function allArticles()
    {
        $articles= Article::where('type', 1)
        ->where('status', 1)->get();
        return view('site.layouts.inners.all-articles', compact('articles'));
    }
    
}
