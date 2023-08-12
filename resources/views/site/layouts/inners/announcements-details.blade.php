@extends('site.layouts.app')

@section('title')
الإعلانات
@endsection


@section('content_title')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ getSiteName() }}</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <a
            href="{{ route('announcement-details', ['announcement' => $announcement]) }}">الإعلانات</a></li>
@endsection

@section('content')
    @include('site.layouts.main-toolbar')
    <div class="container">
        <h3>{{ $announcement->title }} </h3>
        <p style="text-align: justify">{{ $announcement->content }}</p>
    </div>


    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->
@endsection
