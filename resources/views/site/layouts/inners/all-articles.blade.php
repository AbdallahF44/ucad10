@extends('site.layouts.app')

@section('title')
    {{ __('site.Articles') }}
@endsection


@section('content_title')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ getSiteName() }}</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('all-articles') }}">{{ __('site.Articles') }}</a>
    </li>
@endsection

@section('content')
    @include('site.layouts.main-toolbar')
    <div class="container">
        <div class="edu-event-area event-area-1 gap-large-text">
            <div class="container edublink-animated-shape">
                <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">{{ __('site.Articles') }}</span>
                    <h2 class="title">{{ __('site.Latest Atricles') }}</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>

                <div class="row g-5">
                    @foreach ($articles as $article)
                        @if (lang() == 'en' && !isset($article->getTranslations('title', ['en'])['en']))
                        @else
                            <!-- Start Event Grid  -->
                            <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                                <div class="edu-event event-style-1">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="event-details.html">
                                                <img src="{{ asset('site/assets/images/event/event-01.jpg') }}"
                                                    alt="Blog Images">
                                            </a>
                                            <div class="event-time">
                                                <span><i
                                                        class="icon-33"></i>{{ $article->created_at->format('h:i:s') }}</span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="event-date">
                                                <span class="day">{{ $article->created_at->format('d') }}</span>
                                                <span class="month">{{ $article->created_at->format('M') }}</span>
                                            </div>
                                            <h5 class="title"><a href="event-details.html">{{ $article->title }}</a></h5>
                                            <p> {{ Str::limit($article->content, 100) }}</p>
                                            <div class="read-more-btn">
                                                <a class="edu-btn btn-small btn-secondary"
                                                    href="{{ route('article-details', ['article' => $article]) }}">Learn
                                                    More <i class="icon-4"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>

    </div>


    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->
@endsection
