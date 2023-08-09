<?php

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

Route::get('/', function () {
    return view('site.index');
})->name('home');

// Route::get('/frontSite', function () {
//     return view('site.index');
// });

// Route::get('/inner', function () {
//     return view('site.inner');
// })->name('inner');
Route::get('/who_we_are', [LocalizedContentController::class, 'who_we_are']
)->name('who_we_are');


Route::get('lang/{lang}', function ($lang) {
    if (in_array($lang, ['ar', 'en'])) {
        session()->put('lang', $lang);
    }
    return redirect()->back();
})->name('lang');
