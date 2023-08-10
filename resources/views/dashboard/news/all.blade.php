@extends('dashboard.layouts.master')

@section('content_title')
    All News
@endsection

@section('btn_toolbar')
        <button href="#" data-bs-toggle="modal" type="submit"
           data-bs-target="#create_news"
           class="me-5 btn btn-sm btn-primary"
           id="kt_toolbar_primary_button">Create</button>

@endsection

@push('css')
    @livewireStyles
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

@endpush
@push('scripts')
    @livewireScripts
    <script src="{{ asset('livewire/livewire.js') }}" defer></script>

    {{-- Bootstrap Scripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

@endpush

@section('toolbar_path')
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            All News
        </li>
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')
    @livewire('news.index')
    @stack('scripts_livewire')
@endsection
