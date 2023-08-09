@extends('site.layouts.app')

@section('title')
    {{ __('site.Who We Are') }}
@endsection


@section('content_title')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{$siteName}}</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('who_we_are')}}">{{ __('site.Who We Are') }}</a></li>

@endsection

@section('content')
    @include('site.layouts.main-toolbar')
    <div class="container">
        <h3>{{ $title }} </h3>
        <p style="text-align: justify">{{ $description }}</p>
    </div>


    {{-- @include('site.layouts.testimonial') --}}

    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->
@endsection
