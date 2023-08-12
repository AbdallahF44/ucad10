@extends('site.layouts.app')

@section('title')
    {{ __('site.Continuous Learning') }}
@endsection


@section('content_title')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{getSiteName()}}</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('continuous-learning')}}"> {{ __('site.Continuous Learning') }}</a></li>

@endsection

@section('content')
    @include('site.layouts.main-toolbar')
    <div class="container">
        <h3>{{ $title }} </h3>
        <p style="text-align: justify">{{ $content }}</p>
    </div>


    {{-- @include('site.layouts.testimonial') --}}

    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->
@endsection
