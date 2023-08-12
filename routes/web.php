<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LocalizedContentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard.welcome');
})->name('home');

Route::get('settings',\App\Http\Livewire\Settings\Index::class)->name('settings');
Route::get('contents',\App\Http\Livewire\Contents\Index::class)->name('contents');
Route::get('articles',\App\Http\Livewire\Articles\Index::class)->name('articles');
Route::get('advertisements',\App\Http\Livewire\Advertisements\Index::class)->name('advertisements');
Route::get('news',\App\Http\Livewire\News\Index::class)->name('news');

// Route::get('/', function () {
//     return view('site.index');
// })->name('home');

// Route::get('/frontSite', function () {
    //     return view('site.index');
    // });
    
    // Route::get('/inner', function () {
        //     return view('site.inner');
        // })->name('inner');
        
        Route::get('/who_we_are', [ArticleController::class, 'who_we_are']
        )->name('who-we-are');
        Route::get('/continuous-learning', [ArticleController::class, 'continuous_learning']
        )->name('continuous-learning');
Route::get('/article1', [ArticleController::class, 'myarticle']
)->name('article1');
//Route::get('/articles', [ArticleController::class, 'articles']
//)->name('articles');
Route::get('/', [ArticleController::class, 'index']
)->name('home');
// Route::view('/article-details', 'site.layouts.inners.article-details')
// ->name('article-details');
Route::get('/article-details/{article}', [ArticleController::class, 'showDetails'])->name('article-details');
Route::get('/all-articles', [ArticleController::class, 'allArticles'])->name('all-articles');

Route::get('/جميع الدورات', [ArticleController::class, 'allCourses']
)->name('جميع الدورات');

Route::get('/workshop-details/{workshop}', [ArticleController::class, 'showWorkshopDetails'])->name('workshop-details');
Route::get('/workshop-form/{workshop}', [ArticleController::class, 'WorkshopForm'])->name('workshop-form');



Route::get('lang/{lang}', function ($lang) {
    if (in_array($lang, ['ar', 'en'])) {
        session()->put('lang', $lang);
    }
    return redirect()->back();
})->name('lang');
