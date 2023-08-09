
{{--<div class="toolbar" id="kt_toolbar">--}}
{{--    <!--begin::Container-->--}}
{{--    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">--}}
{{--        <!--begin::Page title-->--}}
{{--        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"--}}
{{--             data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"--}}
{{--             class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">--}}
{{--            <!--begin::Title-->--}}
{{--            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">@yield('content_title')</h1>--}}
{{--            <!--end::Title-->--}}
{{--            <!--begin::Separator-->--}}
{{--            <span class="h-20px border-gray-200 border-start mx-4"></span>--}}
{{--            <!--end::Separator-->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            @yield('content_title')
        </ol>
    </div>
</nav>

