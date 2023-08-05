@extends('site.layouts.app')

@section('title')
الرئيسية
@endsection

@section('content_title')
{{getSiteName()}}|{{__('site.Home')}}
@endsection

@section('content')

@include('site.layouts.main-toolbar')

    <!--=====================================-->
    <!--=       Hero Banner Area Start      =-->
    <!--=====================================-->
    @include('site.layouts.banner')

    <!--=====================================-->
    <!--=       Features Area Start      	=-->
    <!--=====================================-->
    <!-- Start Categories Area  -->
    @include('site.layouts.categories')
    <!-- End Categories Area  -->
    <!--=====================================-->
    <!--=       About Area Start      		=-->
    <!--=====================================-->
    @include('site.layouts.about')
    <!--=====================================-->
    <!--=       CounterUp Area Start      	=-->
    <!--=====================================-->
    @include('site.layouts.counterUp')
    <!--=====================================-->
    <!--=       Course Area Start      		=-->
    <!--=====================================-->
    <!-- Start Course Area  -->
    @include('site.layouts.course')
    <!-- End Course Area -->
    <!--=====================================-->
    <!--=       	Campus Area Start      =-->
    <!--=====================================-->
    <!-- Start Campus Area  -->
    @include('site.layouts.campus')
    <!-- End Campus Area  -->
    <!--=====================================-->
    <!--=       Testimonial Area Start      =-->
    <!--=====================================-->
    <!-- Start Testimonial Area  -->
    @include('site.layouts.testimonial')
    <!-- End Testimonial Area  -->
    <!--=====================================-->
    <!--=       Video Area Start      		=-->
    <!--=====================================-->
    @include('site.layouts.video')
    <!--=====================================-->
    <!--=       	CTA Area Start      	=-->
    <!--=====================================-->
    <!-- Start CTA Area  -->
    @include('site.layouts.cta')
    <!-- End CTA Area  -->
    <!--=====================================-->
    <!--=       Event Area Start      		=-->
    <!--=====================================-->
    <!-- Start Event Area  -->
    @include('site.layouts.event')
    <!-- End Event Area  -->
    <!--=====================================-->
    <!--=       Brand Area Start      		=-->
    <!--=====================================-->
    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->

    <!-- Start Ad Banner Area  -->
    @include('site.layouts.ad-banner')
    <!-- End Ad Banner Area  -->
@endsection

