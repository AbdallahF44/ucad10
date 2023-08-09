<link rel="stylesheet" href="{{ asset('site/assets/css/vendor/bootstrap.min.css') }}">
@if (lang() == 'ar')
    <link rel="stylesheet" href="{{ asset('site/assets/css/vendor/bootstrap.rtl.min.css') }}">
@endif
<link rel="stylesheet" href="{{ asset('site/assets/css/vendor/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('site/assets/css/vendor/remixicon.css') }}">
<link rel="stylesheet" href="{{ asset('site/assets/css/vendor/magnifypopup.min.css') }}">
<link rel="stylesheet" href="{{ asset('site/assets/css/vendor/odometer.min.css') }}">
<link rel="stylesheet" href="{{ asset('site/assets/css/vendor/lightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('site/assets/css/vendor/animation.min.css') }}">
<link rel="stylesheet" href="{{ asset('site/assets/css/vendor/jqueru-ui-min.css') }}">
<link rel="stylesheet" href="{{ asset('site/assets/css/vendor/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('site/assets/css/vendor/tipped.min.css') }}">

<!-- Site Stylesheet -->
<link rel="stylesheet" href="{{ asset('site/assets/css/app.css') }}">

@if (lang() == 'ar')
    <link rel="stylesheet" href="{{ asset('site/assets/css/ar.css') }}">
@endif
@stack('css')
