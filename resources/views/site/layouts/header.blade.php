<header class="edu-header header-style-2">
    <div class="header-top-bar">
        <div class="container">
            <div class="header-top">
                <div class="header-top-left">
                    <ul class="header-info">
                        <li><a href="tel:+011235641231"><i class="icon-phone"></i>{{__('site.Call')}}: {{env('TELEPHONE_NUMBER')}}</a></li>
                        <li><a href="mailto:info@edublink.com" target="blank"><i class="icon-envelope"></i>{{__('site.Email')}}:
                                {{ env('EMAIL_ADDRESS')}}</a></li>
                    </ul>
                </div>

                <div class="header-top-right">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu"  style="justify-content: end;">

                            <div class="">
                                <ul class="header-info">
                                    <li class="has-droupdown"><a class="mymenu" href="#"> {{__('site.E services')}}</a>
                                        <ul class="submenu">
                                            <li><a href="">{{__('site.Lecturers')}}</a></li>
                                            <li><a href="{{route('who-we-are')}}">{{__('site.Students')}}</a></li>

                                        </ul>
                                    </li>

                                    <li><a href="#">{{__('site.continuous education')}}</a></li>



                                    <!-- <li class="header-btn"><a href="#" class="edu-btn btn-secondary btn-medium">Apply Now <i class="icon-4"></i></a></li> -->
                                </ul>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    <div id="edu-sticky-placeholder"></div>
    <div class="header-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-brand">
                    <div class="logo">
                        <a href="index.html">
                            <img width="100px" height="100px" class="logo-light" src="{{ asset('site/logo.png') }}" alt="Corporate Logo">
                            <img width="100px" height="100px" class="logo-dark" src="{{ asset('site/logo.png') }}" alt="Corporate Logo">

                        </a>
                    </div>
                </div>
                <div class="header-mainnav">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="has-droupdown"><a href="#">{{__('site.About College')}}</a>
                                <ul class="submenu">
                                    <li><a href="">{{__('site.Welcome Speech')}}</a></li>
                                    <li><a href="{{route('who-we-are')}}">{{__('site.Who We Are')}}</a></li>
                                    <li><a href="{{route('article1')}}">{{__('site.Vision and mission')}}</a></li>
                                    <li><a href="course-four.html">{{__('site.General Objectives')}}</a></li>
                                    <li><a href="course-five.html">{{__('site.College Council')}}</a></li>
                                    <li><a href="course-details.html">{{__('site.Our Partners')}}</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown"><a href="#">{{__('site.Departments')}}</a>
                                <ul class="submenu">
                                    <li><a href="">{{__('site.Course Style 1')}}</a></li>
                                    <li><a href="course-two.html">{{__('site.Course Style 2')}}</a></li>
                                    <li><a href="course-three.html">{{__('site.Course Style 3')}}</a></li>
                                    <li><a href="course-four.html">{{__('site.Course Style 4')}}</a></li>
                                    <li><a href="course-five.html">{{__('site.Course Style 5')}}</a></li>
                                    <li><a href="course-details.html">{{__('site.Course Details 1')}}</a></li>
                                    <li><a href="course-details-2.html">{{__('site.Course Details 2')}}</a></li>
                                    <li><a href="course-details-3.html">{{__('site.Course Details 3')}}</a></li>
                                </ul>
                            </li>


                            <li class="has-droupdown"><a href="#">{{__("site.Admission and Registration")}}</a>
                                <ul class="submenu">
                                    <!-- <li><a href="">About Admission And Registration</a> -->
                                    <li><a href="course-two.html">{{__("site.About Admission")}}</a></li>
                                    <li><a href="course-three.html">{{__("site.Grading System")}}</a></li>
                                    <li><a href="course-four.html">{{__("site.New Students")}}</a></li>
                                    <li><a href="course-five.html">{{__("site.Frequently Asked Questions")}}</a></li>
                                    <li><a href="course-details.html">{{__("site.Students’ Guidelines")}}</a></li>
                                </ul>
                            </li>

                            <li class="has-droupdown"><a href="#">{{__("site.Academic Degree")}}</a>
                                <ul class="mega-menu">
                                    <li>
                                        <h6 class="menu-title">{{__("site.Bachelor")}}</h6>
                                        <ul class="submenu mega-sub-menu-01">
                                            <li><a href="about-one.html">About Us 1</a></li>
                                            <li><a href="about-two.html">About Us 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h6 class="menu-title">{{__('site.Diploma')}}</h6>
                                        <ul class="submenu mega-sub-menu-01">
                                            <li><a href="gallery-grid.html">{{__('site.Gallery Grid')}}</a></li>
                                            <li><a href="gallery-masonry.html">{{__('site.Gallery Masonry')}}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li><a href="#">{{__("site.Research")}}</a>

                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <ul class="header-action">
                        <li class="icon search-icon">
                            <a href="javascript:void(0)" class="search-trigger">
                                <i class="icon-2"></i>
                            </a>
                        </li>
                        {{-- <li class="icon cart-icon">
                            <a href="cart.html" class="cart-icon">
                                <i class="icon-3"></i>
                                <span class="count">0</span>
                            </a>
                        </li> --}}
                        @if (lang()== 'ar')
                            <li>
                                <a href="{{route('lang',['en'])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22">
                                        <path d="M2.04932 13.0001H7.52725C7.70624 16.2689 8.7574 19.3054 10.452 21.881C5.98761 21.1872 2.5001 17.5403 2.04932 13.0001ZM2.04932 11.0001C2.5001 6.4598 5.98761 2.81288 10.452 2.11914C8.7574 4.69468 7.70624 7.73123 7.52725 11.0001H2.04932ZM21.9506 11.0001H16.4726C16.2936 7.73123 15.2425 4.69468 13.5479 2.11914C18.0123 2.81288 21.4998 6.4598 21.9506 11.0001ZM21.9506 13.0001C21.4998 17.5403 18.0123 21.1872 13.5479 21.881C15.2425 19.3054 16.2936 16.2689 16.4726 13.0001H21.9506ZM9.53068 13.0001H14.4692C14.2976 15.7829 13.4146 18.3733 11.9999 20.5916C10.5852 18.3733 9.70229 15.7829 9.53068 13.0001ZM9.53068 11.0001C9.70229 8.21722 10.5852 5.62684 11.9999 3.40853C13.4146 5.62684 14.2976 8.21722 14.4692 11.0001H9.53068Z" fill="rgba(255,0,0,1)"></path>
                                    </svg>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{route('lang',['ar'])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22">
                                        <path d="M2.04932 13.0001H7.52725C7.70624 16.2689 8.7574 19.3054 10.452 21.881C5.98761 21.1872 2.5001 17.5403 2.04932 13.0001ZM2.04932 11.0001C2.5001 6.4598 5.98761 2.81288 10.452 2.11914C8.7574 4.69468 7.70624 7.73123 7.52725 11.0001H2.04932ZM21.9506 11.0001H16.4726C16.2936 7.73123 15.2425 4.69468 13.5479 2.11914C18.0123 2.81288 21.4998 6.4598 21.9506 11.0001ZM21.9506 13.0001C21.4998 17.5403 18.0123 21.1872 13.5479 21.881C15.2425 19.3054 16.2936 16.2689 16.4726 13.0001H21.9506ZM9.53068 13.0001H14.4692C14.2976 15.7829 13.4146 18.3733 11.9999 20.5916C10.5852 18.3733 9.70229 15.7829 9.53068 13.0001ZM9.53068 11.0001C9.70229 8.21722 10.5852 5.62684 11.9999 3.40853C13.4146 5.62684 14.2976 8.21722 14.4692 11.0001H9.53068Z" fill="rgba(255,0,0,1)"></path>
                                    </svg>
                                </a>
                            </li>
                        @endif
                        <li class="mobile-menu-bar d-block d-xl-none">
                            <button class="hamberger-button">
                                <i class="icon-54"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo">
                    <a href="index.html">
                        <img width="60px" height="60px" class="logo-light" src="{{ asset('site/logo.png') }}" alt="Corporate Logo">
                        <img width="60px" height="60px" class="logo-dark" src="{{ asset('site/logo.png') }}" alt="Corporate Logo">
                    </a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="icon-73"></i>
                    </button>
                </div>
            </div>

            {{-- {{__('site.About College')}}</a>
                                <ul class="submenu">
                                    <li><a href="">{{__('site.Welcome Speech')}}</a></li>
                                    <li><a href="{{route('who-we-are')}}">{{__('site.Who We Are')}}</a></li>
                                    <li><a href="course-three.html">{{__('site.Vision and mission')}}</a></li>
                                    <li><a href="course-four.html">{{__('site.General Objectives')}}</a></li>
                                    <li><a href="course-five.html">{{__('site.College Council')}}</a></li>
                                    <li><a href="course-details.html">{{__('site.Our Partners')}}< --}}
            <ul class="mainmenu">
                <li class="has-droupdown"><a href="#">{{__('site.About College')}}</a>
                    <ul class="mega-menu mega-menu-one">
                        <li>
                            <ul class="submenu mega-sub-menu mega-sub-menu-01">
                                <li><a href="index.html">{{__('site.Welcome Speech')}}</a></li>
                                <li><a href="index-distant-learning.html">{{__('site.Who We Are')}}</a></li>
                                <li><a href="index-university.html">{{__('site.Vision and mission')}}</a></li>
                                <li><a href="index-online-academy.html">{{__('site.General Objectives')}} </a>
                                <li><a href="index-online-academy.html">{{__('site.College Council')}} </a>
                                <li><a href="index-online-academy.html">{{__('site.Our Partners')}}</a>
                                </li>
                                {{-- <li><a href="index-modern-schooling.html">Modern Schooling</a></li>
                                <li><a href="index-kitchen.html">Kitchen Coach</a></li>
                                <li><a href="index-yoga.html">Yoga Instructor</a></li> --}}
                            </ul>
                        </li>

                        <li>
                            <ul class="submenu mega-sub-menu-01">
                                <li>
                                    <a href="#">

                                        {{-- <img src="{{asset('site/assets/images/others/mega-menu-image.webp')}}" alt="advertising Image"> --}}
                                        <img src="  {{ asset('site/logo.png') }}" alt="advertising Image">
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-droupdown"><a href="#">{{__('site.Departments')}}</a>
                    <ul class="mega-menu">
                        <li>
                            <ul class="submenu mega-sub-menu-01">
                                <li><a href="about-one.html">{{__('site.Departments')}}</a></li>
                                <li><a href="about-two.html">{{__('site.Departments')}}</a></li>
                                <li><a href="about-three.html">About Us 3</a></li>
                                <li><a href="team-one.html">Instructor 1</a></li>
                                <li><a href="team-two.html">Instructor 2</a></li>
                                <li><a href="team-three.html">Instructor 3</a></li>
                                <li><a href="team-details.html">Instructor Profile</a></li>
                                <li><a href="faq.html">Faq's</a></li>

                            </ul>
                        </li>


                    </ul>
                </li>



                <li class="has-droupdown"><a href="#">{{__("site.Admission and Registration")}}</a>
                    <ul class="submenu">

                        <li><a href="course-one.html">{{__("site.About Admission")}}</a></li>
                        <li><a href="course-two.html">{{__("site.Grading System")}}</a></li>
                        <li><a href="course-three.html">{{__("site.New Students")}}</a></li>
                        <li><a href="course-four.html">{{__("site.Frequently Asked Questions")}}</a></li>
                        <li><a href="course-five.html">{{__("site.Students’ Guidelines")}}</a></li>
                    </ul>
                </li>

                <li class="has-droupdown"><a href="#">{{__("site.Academic Degree")}}</a>
                    <ul class="submenu">
                        <li><a href="blog-standard.html">{{__("site.Bachelor")}}</a></li>
                        <li><a href="blog-masonry.html">{{__("site.Diploma")}}</a></li>

                    </ul>
                </li>
                <li class=""><a href="#">{{__("site.Research")}}</a>
                    {{-- <ul class="submenu">
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="contact-me.html">Contact Me</a></li>
                    </ul> --}}
                </li>
            </ul>
        </div>
    </div>
    <!-- Start Search Popup  -->
    <div class="edu-search-popup">
        <div class="content-wrap">
            <div class="site-logo">
                <img width="60px" height="60px" class="logo-light" src="{{ asset('site/logo.png') }}" alt="Corporate Logo">
                <img width="60px" height="60px" class="logo-dark" src="{{ asset('site/logo.png') }}" alt="Corporate Logo">
            </div>
            <div class="close-button">
                <button class="close-trigger"><i class="icon-73"></i></button>
            </div>
            <div class="inner">
                <form class="search-form" action="#">
                    <input type="text" class="edublink-search-popup-field" placeholder="Search Here...">
                    <button class="submit-button"><i class="icon-2"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Search Popup  -->
</header>
