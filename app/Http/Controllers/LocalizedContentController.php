<?php

namespace App\Http\Controllers;

use App\Models\LocalizedContent;
use App\Models\Setting;
use Illuminate\Http\Request;

class LocalizedContentController extends Controller
{
    public function who_we_are(){
        $siteName = getSiteName();
        $localizedContent = LocalizedContent::where('title','LIKE', '%who we are%')->first();
        $title =  $localizedContent->title;
    
        $description =  $localizedContent->content;
        // return $siteName;
        return view('site.layouts.inners.who_we_are', compact('siteName','title','description'));
    }
}
