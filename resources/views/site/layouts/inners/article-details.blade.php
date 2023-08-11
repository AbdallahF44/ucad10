@extends('site.layouts.app')

@section('title')
    {{ __('site.Articles') }}
@endsection


@section('content_title')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{getSiteName()}}</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('article-details', ['article' => $article]) }}">{{ __('site.Articles') }}</a></li>

@endsection

@section('content')
    @include('site.layouts.main-toolbar')
    <div class="container">
        <h3>{{ $article->title }} </h3>
        <p style="text-align: justify">{{ $article->content }}</p>
    </div>


    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->
@endsection
