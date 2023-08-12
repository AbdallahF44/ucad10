@extends('site.layouts.app')

@section('title')
دورات التعليم المستمر
@endsection


@section('content_title')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{getSiteName()}}</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('جميع الدورات')}}">جميع الدورات</a></li>

@endsection

@section('content')
    @include('site.layouts.main-toolbar')
    <div class="container">
      

<div class="edu-course-area course-area-3 section-gap-large bg-lighten04">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <h2 class="title">الدورات الحالية</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="isotope-wrapper">
            {{-- <div class="isotop-button isotop-filter">
                <button data-filter=".undergraduate" class="is-checked">
                    <span class="filter-text">Undergraduate Program</span>
                </button>
                <button data-filter=".graduate">
                    <span class="filter-text">Graduate Program</span>
                </button>
                <button data-filter=".online">
                    <span class="filter-text">Online Program</span>
                </button>
            </div> --}}
            <div class="row g-5 isotope-list">
                <!-- Start Single Course  -->
                @foreach ($workshops as $workshop)                    
               <div class="col-md-6 col-lg-4 isotope-item undergraduate graduate">
                    <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="{{asset('site/assets/images/course/course-08.jpg')}}" alt="Course Meta">
                                </a>
                                {{-- <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                </div> --}}
                            </div>
                            <div class="content">
                                <span class="course-level" >
                                    تبدأ {{ \Carbon\Carbon::parse($workshop->start_date)->locale('ar')->isoFormat('DD-MMMM') }}
                                </span>
                                <h5 class="title">
                                    <a href="course-details.html">{{$workshop->title}}</a>
                                </h5>
                                
                                <p>{{ Str::limit($workshop->description, 100)}}</p>
                                {{-- <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5.0 /7 Rating)</span>
                                </div> --}}
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-small btn-secondary" href="{{ route('workshop-details', ['workshop' => $workshop]) }}">سجل الآن <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                @endforeach
                {{-- <!-- Start Single Course  -->
                <div class="col-md-6 col-lg-4 isotope-item undergraduate graduate">
                    <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="{{asset('site/assets/images/course/course-09.jpg')}}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Economics</span>
                                <h5 class="title">
                                    <a href="course-details.html">Major in Economics</a>
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor incididunt labore dolore magna.</p>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(4.9 /5 Rating)</span>
                                </div>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-small btn-secondary" href="course-details.html">Learn More <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-md-6 col-lg-4 isotope-item undergraduate online">
                    <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="{{asset('site/assets/images/course/course-10.jpg')}}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>Online Only</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Business</span>
                                <h5 class="title">
                                    <a href="course-details.html">Business Studies</a>
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor incididunt labore dolore magna.</p>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(4.7 /9 Rating)</span>
                                </div>
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-small btn-secondary" href="course-details.html">Learn More <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  --> --}}
            </div>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1">
            <img class="d-block-shape-light" data-depth="2" src="{{asset('site/assets/images/others/map-shape-3.png')}}" alt="Shape">
            <img class="d-none-shape-dark" data-depth="2" src="{{asset('site/assets/images/others/3-Home-1.png')}}" alt="Shape">
        </li>
        <li class="shape-2">
            <img class="d-block-shape-light" data-depth="2" src="{{asset('site/assets/images/others/map-shape-3.png')}}" alt="Shape">
            <img class="d-none-shape-dark" data-depth="2" src="{{asset('site/assets/images/others/dark-map-shape-3.png')}}" alt="Shape">
        </li>
    </ul>
</div>
    </div>



    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->
@endsection

