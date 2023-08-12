@extends('site.layouts.app')

@section('title')
   تفاصيل الدورة
@endsection


@section('content_title')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{getSiteName()}}</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('workshop-details', ['workshop' => $workshop]) }}">تفاصيل الدورة</a></li>

@endsection

@section('content')
    @include('site.layouts.main-toolbar')
    <div class="container">
    <div class="workshop-card">
        <div class="workshop-header">
            <h2>{{ $workshop->title }}</h2>
        </div>
        <div class="workshop-content">
            <h6>{{ $workshop->description }}</h6>
            <p>تبدأ {{ \Carbon\Carbon::parse($workshop->start_date)->locale('ar')->isoFormat('DD-MMMM') }}</p>
            <p>ينتهي التسجيل في:  {{ \Carbon\Carbon::parse($workshop->deadline)->locale('ar')->isoFormat('DD-MMMM') }}</p>
            <p>أيام ومواعيد الدورة: {{ $workshop->schedule }}</p>
            <div class="read-more-btn">
                <a class="edu-btn btn-small btn-secondary" href="{{$workshop->url}}">سجل الآن <i class="icon-4"></i></a>
            </div>
        </div>
    </div>
    </div>    


{{-- <div class="container">
        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
            <div class="inner">
                <div class="thumbnail">
                    <a href="course-details.html">
                        <img src="{{asset('site/assets/images/course/course-08.jpg')}}" alt="Course Meta">
                    </a>                    
                </div>
                <div class="content">
                    <span class="course-level" >
                        تبدأ {{ \Carbon\Carbon::parse($workshop->start_date)->locale('ar')->isoFormat('DD-MMMM') }}
                    </span>
                    <h5 class="title">
                        <a href="course-details.html"> hellllo{{$workshop->title}}</a>
                    </h5>
                    
                    <p>{{ $workshop->description }}</p>
                   
                    <div class="read-more-btn">
                        <a class="edu-btn btn-small btn-secondary" href="{{ route('workshop-details', ['workshop' => $workshop]) }}">سجل الآن <i class="icon-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
   
    {{--  --}}
    {{-- <div class="container">
        <h3>{{ $workshop->title }} </h3>
        <p style="text-align: justify">{{ $workshop->description }}</p>
        <p style="text-align: justify"> 
            تبدأ {{ \Carbon\Carbon::parse($workshop->start_date)->locale('ar')->isoFormat('DD-MMMM') }}
        </p>
        <p style="text-align: justify">{{ $workshop->schedule }}</p>
    </div> --}}

<div class="container">
    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->
</div>
@endsection
