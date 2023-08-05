@extends('site.layouts.app')

@section('title')
   {{__('site.Who We Are')}}
@endsection


@section('content_title')
{{$siteName}}|{{__('site.Who We Are')}}
@endsection

@section('content')
@include('site.layouts.main-toolbar')
 
    <h3>{{$title}}</h3>
    <p>{{ $description}}</p>


{{--    @include('site.layouts.testimonial')--}}

    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->
@endsection

