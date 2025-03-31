@extends('layouts.master')

@section('title', 'Instrutor - SpaceSeat')

@section('content')
    <div class="mobile-header">
        <button class="menu-toggle">
            <i class="bi bi-list"></i>
        </button>
        <div class="d-flex align-items-center">
            <span class="h6 mb-0 me-2">SpaceSeat</span>
            <span class="badge bg-accent">Instrutor</span>
        </div>
    </div>

    <div class="d-flex min-vh-100">
        <!-- Sidebar -->
        @include('components.instrutor.sidebar')

        <!-- Main Content -->
        <div class="content-wrapper flex-grow-1 p-4">
            @hasSection('header')
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        @yield('breadcrumbs')
                        <h4 class="fw-bold mb-0">@yield('header')</h4>
                    </div>
                    @yield('header-actions')
                </div>
            @endif

            @yield('main-content')
        </div>
    </div>
@endsection 