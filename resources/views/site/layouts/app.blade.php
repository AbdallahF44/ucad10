<!DOCTYPE html>
<html class="no-js" dir="{{ direction() }}" lang="zxx">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site/logo.png') }}">
    <!-- Favicons -->
    {{-- <link href="{{url('frontSite/style')}}/assets/img/logo.png" rel="icon"> --}}
    <link href="{{ asset('site/logo.png') }}" rel="apple-touch-icon">

    <!-- CSS ============================================ -->

    @include('site.layouts.styles')
</head>

<body class="sticky-header ">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <!-- Start preloader Area  -->
    {{-- @include('site.layouts.preloader') --}}
    <!-- End preloader Area  -->

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        @include('site.layouts.header')


        @yield('content')

        <!--=====================================-->
        <!--=       CTA Banner Area Start      =-->
        <!--=====================================-->

        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <!-- Start Footer Area  -->
        @include('site.layouts.footer')
        <!-- End Footer Area  -->



    </div>

    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS ============================================ -->
    @include('site.layouts.scripts')
</body>

</html>
