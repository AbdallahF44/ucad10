<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{

    public function who_we_are()
    {
        $article = Article::where('title', 'LIKE', '%Who we are%')->first();
        $title =  $article->title;

        $description =  $article->content;
        return view('site.layouts.inners.who-we-are', compact('title', 'description'));
    }
    public function continuous_learning()
    {
        $article = Article::where('title', 'LIKE', '%Continuous Learning%')->first();
        $title =  $article->title;

        $content =  $article->content;
        return view('site.layouts.inners.continuous-learning', compact('title', 'content'));
    }

    public function articles()
    {
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
    public function index()
    {
        if (lang() == 'ar') {
        $articles = Article::where('type', 1)
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $announcements = Article::where('type', 2)
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

            $news = Article::where('type', 3)
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
    }

        if (lang() == 'en') {
            $articles = Article::where('type', 1)
            ->where('status', 1)
            ->where('title->en', '!=', '')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $announcements = Article::where('type', 2)
            ->where('status', 1)
            ->where('title->en', '!=', '')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

            $news = Article::where('type', 3)
                ->where('status', 1)
                ->where('title->en', '!=', '')
                ->orderBy('created_at', 'desc')
                ->limit(3)
                ->get();
        }
      
     
        return view('site.index', compact('articles', 'announcements', 'news'));
    }
    public function showDetails(Article $article)
    {
        return view('site.layouts.inners.article-details', compact('article'));
    }
    public function showWorkshopDetails(Workshop $workshop)
    {
        return view('site.layouts.inners.workshop-details', compact('workshop'));
    }

    public function allArticles()
    {
        $articles = Article::where('type', 1)
            ->where('status', 1)->get();
        return view('site.layouts.inners.all-articles', compact('articles'));
    }
    public function allCourses()
    {
        $workshops = Workshop::all();
        return view('site.layouts.inners.allCourses', compact('workshops'));
    }
    public function workshopForm()
    {
        $workshops = Workshop::all();
        return view('site.layouts.inners.workshopForm', compact('workshops'));
    }
    public function contactUs()
    {
        return view('site.layouts.inners.contact_us');
    }


    public function showAnnouncementDetails(Article $announcement)
    {
        return view('site.layouts.inners.announcements-details', compact('announcement'));
    }

    public function allAnnouncements()
    {
        $announcements = Article::where('type', 2)
            ->where('status', 1)->get();
        return view('site.layouts.inners.all-announcements', compact('announcements'));
    }

    public function showNewsDetails(Article $news)
    {
        return view('site.layouts.inners.news-details', compact('news'));
    }

    public function allNews()
    {
        $news = Article::where('type', 3)
            ->where('status', 1)->get();
        return view('site.layouts.inners.all-news', compact('news'));
    }
}
