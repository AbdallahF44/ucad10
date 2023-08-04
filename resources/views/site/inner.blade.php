@extends('site.layouts.app')

@section('title')
   {{__('site.Who We Are')}}
@endsection

@php $siteName = getSiteName(); @endphp

@section('content_title')
{{$siteName}}|{{__('site.Who We Are')}}
@endsection

@section('content')
@include('site.layouts.main-toolbar')
 
    @php

    $localizedContent =  App\Models\LocalizedContent::where('title','LIKE', '%who we are%')->first();


    $Title =  $localizedContent->title;

    $Description =  $localizedContent->content;


    @endphp

    <h3>{{$Title}}</h3>
    <p>{{ $Description}}</p>


{{--    @include('site.layouts.testimonial')--}}

    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->
@endsection

