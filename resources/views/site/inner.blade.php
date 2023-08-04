@extends('site.layouts.app')

@section('title')
    الرئيسية
@endsection

@section('content')
  <div>
     
      @php
        $currentLanguage = app()->getLocale();
      @endphp
    <h2>{{($currentLanguage === 'ar') ? env('SITE_NAME_AR') : env('SITE_NAME_EN')}} </h2>
  </div>

    <div class="container">
    <h1>{{ __('site.Who We Are') }}</h1>
    
    @php
       
        $title = ($currentLanguage === 'ar') ? 'من نحن ' : 'who we are';
        $content = App\Models\Content::where('title', $title)->where('language_id', ($currentLanguage === 'ar') ? 1 : 2)->first();
    @endphp
    
    <p>{{ $content->content }}</p>
    </div>


{{--    @include('site.layouts.testimonial')--}}

    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->
@endsection

