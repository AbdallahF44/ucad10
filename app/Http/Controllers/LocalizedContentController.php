<?php

namespace App\Http\Controllers;

use App\Models\LocalizedContent;
use App\Models\Setting;
use Illuminate\Http\Request;

class LocalizedContentController extends Controller
{
    public function who_we_are(){
        $localizedContent = LocalizedContent::where('title','LIKE', '%who we are%')->first();
        $title =  $localizedContent->title;

        $description =  $localizedContent->content;
        // return $siteName;
        return view('site.layouts.inners.who_we_are', compact('title','description'));
    }
}
