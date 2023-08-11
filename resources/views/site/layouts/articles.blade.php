<div class="edu-event-area event-area-1 gap-large-text">
    <div class="container edublink-animated-shape">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <span class="pre-title">{{__('site.Articles')}} </span>
            <h2 class="title">{{__('site.Latest Atricles')}}</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        
        
        <div class="row g-5">
            @foreach ($articles as $article )
            <!-- Start Event Grid  -->
            <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-event event-style-1">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="event-details.html">
                                <img src="{{asset('site/assets/images/event/event-01.jpg')}}" alt="Blog Images">
                            </a>
                            <div class="event-time">
                                <span><i class="icon-33"></i>{{$article->created_at->format('h:i:s')}}</span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="event-date">
                                <span class="day">{{$article->created_at->format('d')}}</span>
                                <span class="month">{{$article->created_at->format('M')}}</span>
                            </div>
                            <h5 class="title"><a href="event-details.html">{{$article->title}}</a></h5>
                            <p> {{ Str::limit($article->content, 100) }}</p>
                            {{-- <ul class="event-meta">
                                <li><i class="icon-40"></i>Newyork City, USA</li>
                            </ul> --}}
                            <div class="read-more-btn">
                                <a class="edu-btn btn-small btn-secondary" href="{{ route('article-details', ['article' => $article]) }}">Learn More <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <!-- End Event Grid  -->
            <!-- Start Event Grid  -->
            <div class="col-lg-4 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-event event-style-1">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="event-details.html">
                                <img src="{{asset('site/assets/images/event/event-02.jpg')}}" alt="Blog Images">
                            </a>
                            <div class="event-time">
                                <span><i class="icon-33"></i>{{$article->created_at->format('h:i:s')}}</span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="event-date">
                                <span class="day">{{$article->created_at->format('d')}}</span>
                                <span class="month">{{$article->created_at->format('M')}}</span>
                            </div>
                            <h5 class="title"><a href="event-details.html"> {{$article->title}}</a></h5>
                            <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor incididunt labore dolore magna.</p>
                            <ul class="event-meta">
                                <li><i class="icon-40"></i>Washington D.C, USA</li>
                            </ul>
                            <div class="read-more-btn">
                                <a class="edu-btn btn-small btn-secondary" href="event-details.html">Learn More <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Event Grid  -->
            <!-- Start Event Grid  -->
            <div class="col-lg-4 col-md-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-event event-style-1">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="event-details.html">
                                <img src="{{asset('site/assets/images/event/event-03.jpg')}}" alt="Blog Images">
                            </a>
                            <div class="event-time">
                                <span><i class="icon-33"></i>{{$article->created_at->format('h:i:s')}}</span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="event-date">
                                <span class="day">{{$article->created_at->format('d')}}</span>
                                <span class="month">{{$article->created_at->format('M')}}</span>
                            </div>
                            <h5 class="title"><a href="event-details.html">{{$article->title}}</a></h5>
                            <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor incididunt labore dolore magna.</p>
                            <ul class="event-meta">
                                <li><i class="icon-40"></i>Newyork City, USA</li>
                            </ul>
                            <div class="read-more-btn">
                                <a class="edu-btn btn-small btn-secondary" href="event-details.html">Learn More <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Event Grid  -->
        </div>
        <div class="event-view-all-btn" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
            <h6 class="view-text">The Latest Events from EduBlink. <a href="event-grid.html" class="btn-transparent">View All <i class="icon-4"></i></a></h6>
        </div>

        <ul class="shape-group">
            <li class="shape-1" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <img class="rotateit" src="{{asset('site/assets/images/about/shape-13.png')}}" alt="Shape">
            </li>
            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <span data-depth=".9"></span>
            </li>
        </ul>
    </div> --}}
    
    @endforeach
</div>
    <div class="event-view-all-btn" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
        <h6 class="view-text"> <a href="{{ route('all-articles', ['article' => $article]) }}" class="btn-transparent">{{__('site.View All')}} <i class="icon-4"></i></a></h6>
    </div>

    <ul class="shape-group">
        <li class="shape-1" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
            <img class="rotateit" src="{{asset('site/assets/images/about/shape-13.png')}}" alt="Shape">
        </li>
        <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
            <span data-depth=".9"></span>
        </li>
    </ul>
</div>

</div>
