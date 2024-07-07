<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') - {{ $settings_g['title'] ?? env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ $settings_g['favicon'] ?? '' }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('back/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('back/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('back/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('back/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--data table-->
    <link rel="stylesheet" href="{{ asset('plugins/datatables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-select/css/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <!-- App Css-->
    <link href="{{ asset('back/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('back/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .uploaded_img {
            height: 168px;
            margin: 0 auto;
            display: block;
            width: auto;
        }

        .remove_image {
            position: absolute;
            top: 0;
            left: 60%;
        }
    </style>
    @yield('head')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    @include('switcher::code')

    <script>
        window.application_root = '{{ url('/') }}';
        window.application_root_api = '{{ url('/api') }}';
    </script>

</head>

<body>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <!-- Begin page -->
    <div class="main" id="app">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="{{ url('/') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    @if (isset($settings_g['logo']) && $settings_g['logo'])
                                        <img src="{{ $settings_g['logo'] ?? env('APP_NAME') }}"
                                            alt="{{ $settings_g['title'] ?? env('APP_NAME') }}" height="22">
                                    @else
                                        {{ $settings_g['title'] ?? '' }}
                                    @endif
                                </span>
                                <span class="logo-lg">
                                    @if (isset($settings_g['logo']) && $settings_g['logo'])
                                        <img src="{{ $settings_g['logo'] ?? env('APP_NAME') }}"
                                            alt="{{ $settings_g['title'] ?? env('APP_NAME') }}" height="17">
                                    @else
                                        {{ $settings_g['title'] ?? '' }}
                                    @endif
                                </span>
                            </a>

                            <a href="{{ url('/') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    @if (isset($settings_g['logo']) && $settings_g['logo'])
                                        <img src="{{ $settings_g['logo'] ?? env('APP_NAME') }}"
                                            alt="{{ $settings_g['title'] ?? env('APP_NAME') }}" height="22">
                                    @else
                                        {{ $settings_g['title'] ?? '' }}
                                    @endif
                                </span>
                                <span class="logo-lg">
                                    @if (isset($settings_g['logo']) && $settings_g['logo'])
                                        <img src="{{ $settings_g['logo'] ?? env('APP_NAME') }}"
                                            alt="{{ $settings_g['title'] ?? env('APP_NAME') }}" height="17">
                                    @else
                                        {{ $settings_g['title'] ?? '' }}
                                    @endif
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <div class="position-relative" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                    id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                    id="search-close-options"></span>
                            </div>

                        </form>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    @if (auth()->user()->profile_image != null)
                                        <img class="rounded-circle header-profile-user"
                                            src="{{ auth()->user()->profile_path }}"
                                            alt="{{ auth()->user()->last_name }}">
                                    @else
                                        <img class="rounded-circle header-profile-user"
                                            src="{{ asset('back/assets/images/avatar.png') }}"
                                            alt="{{ auth()->user()->last_name }}">
                                    @endif
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ auth()->user()->last_name }}</span>
                                        {{-- <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span> --}}
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome {{ auth()->user()->last_name }}</h6>
                                <a class="dropdown-item" href="{{ route('admin.update-profile') }}"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                <a class="dropdown-item"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="{{ url('/') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        @if (isset($settings_g['logo']) && $settings_g['logo'])
                            <img src="{{ $settings_g['logo'] ?? env('APP_NAME') }}"
                                alt="{{ $settings_g['title'] ?? env('APP_NAME') }}" height="22">
                        @else
                            {{ $settings_g['title'] ?? '' }}
                        @endif
                    </span>
                    <span class="logo-lg">
                        @if (isset($settings_g['logo']) && $settings_g['logo'])
                            <img src="{{ $settings_g['logo'] ?? env('APP_NAME') }}"
                                alt="{{ $settings_g['title'] ?? env('APP_NAME') }}" height="50">
                        @else
                            {{ $settings_g['title'] ?? '' }}
                        @endif
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="{{ url('/') }}" class="logo logo-light">
                    <span class="logo-sm">
                        @if (isset($settings_g['logo']) && $settings_g['logo'])
                            <img src="{{ $settings_g['logo'] ?? env('APP_NAME') }}"
                                alt="{{ $settings_g['title'] ?? env('APP_NAME') }}" height="22">
                        @else
                            {{ $settings_g['title'] ?? '' }}
                        @endif
                    </span>
                    <span class="logo-lg">
                        @if (isset($settings_g['logo']) && $settings_g['logo'])
                            <img src="{{ $settings_g['logo'] ?? env('APP_NAME') }}"
                                alt="{{ $settings_g['title'] ?? env('APP_NAME') }}" height="50">
                        @else
                            {{ $settings_g['title'] ?? '' }}
                        @endif
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('dashboard') ? 'active' : '' }}"
                                href="{{ route('dashboard') }}">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboards</span>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('back.news.index') || Route::is('back.news.create') || Route::is('back.news.edit') || Route::is('back.news.categories') ? 'active' : 'collapsed' }}"
                                href="#sidebarNews" data-bs-toggle="collapse" role="button"
                                aria-expanded="{{ Route::is('back.news.index') || Route::is('back.news.create') || Route::is('back.news.edit') || Route::is('back.news.categories') ? 'true' : 'false' }}"
                                aria-controls="sidebarNews">
                                <i class="ri-newspaper-line"></i> <span data-key="t-apps">News</span>
                            </a>
                            <div class="collapse menu-dropdown {{ Route::is('back.news.index') || Route::is('back.news.create') || Route::is('back.news.edit') || Route::is('back.news.categories') ? 'show' : '' }}"
                                id="sidebarNews">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="{{ route('back.news.index') }}"
                                            class="nav-link {{ Route::is('back.news.index') ? 'active' : '' }}"
                                            data-key="t-mailbox"> All </a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{ route('back.news.create') }}"
                                            class="nav-link {{ Route::is('back.news.create') ? 'active' : '' }}"
                                            data-key="t-mailbox"> Create </a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{ route('back.news.categories') }}"
                                            class="nav-link {{ Route::is('back.news.categories') ? 'active' : '' }}"
                                            data-key="t-mailbox"> Category </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        {{-- @isset(auth()->user()->role->permission['permission']['events']['list']) --}}
                        <li class="nav-item">
                            <a class="nav-link menu-link {{(Route::is('back.events.index') || Route::is('back.events.create') || Route::is('back.events.edit')) ? 'active' : 'collapsed'}}" href="#sidebarEvent" data-bs-toggle="collapse" role="button"
                                aria-expanded="{{(Route::is('back.events.index') || Route::is('back.events.create') || Route::is('back.events.edit')) ? 'true' : 'false'}}" aria-controls="sidebarEvent">
                                <i class="ri-calendar-event-fill"></i> <span data-key="t-apps">Events</span>
                            </a>
                            <div class="collapse menu-dropdown {{(Route::is('back.events.index') || Route::is('back.events.create') || Route::is('back.events.edit')) ? 'show' : ''}}" id="sidebarEvent">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="{{route('back.events.index')}}" class="nav-link {{Route::is('back.events.index') ? 'active' : ''}}" data-key="t-mailbox"> All </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('back.events.create')}}" class="nav-link {{Route::is('back.events.create') ? 'active' : ''}}" data-key="t-mailbox"> Create </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('back.research.index') || Route::is('back.research.create') || Route::is('back.research.edit') ? 'active' : 'collapsed' }}"
                                href="#sidebarResearch" data-bs-toggle="collapse" role="button"
                                aria-expanded="{{ Route::is('back.research.index') || Route::is('back.research.create') || Route::is('back.research.edit') ? 'true' : 'false' }}"
                                aria-controls="sidebarResearch">
                                <i class="ri-flask-line"></i> <span data-key="t-apps">Research</span>
                            </a>
                            <div class="collapse menu-dropdown {{ Route::is('back.research.index') || Route::is('back.research.create') || Route::is('back.research.edit') ? 'show' : '' }}"
                                id="sidebarResearch">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="{{ route('back.research.index') }}"
                                            class="nav-link {{ Route::is('back.research.index') ? 'active' : '' }}"
                                            data-key="t-mailbox"> All </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('back.research.create') }}"
                                            class="nav-link {{ Route::is('back.research.create') ? 'active' : '' }}"
                                            data-key="t-mailbox"> Create </a>
                                    </li>

                                </ul>
                            </div>
                        </li> --}}

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('back.people-list.index') || Route::is('back.people-list.create') || Route::is('back.people-list.edit') || Route::is('back.people.index') || Route::is('back.people.edit') ? 'active' : 'collapsed' }}"
                                href="#sidebarPeople" data-bs-toggle="collapse" role="button"
                                aria-expanded="{{ Route::is('back.people-list.index') || Route::is('back.people-list.create') || Route::is('back.people-list.edit') || Route::is('back.people.index') || Route::is('back.people.edit') ? 'true' : 'false' }}"
                                aria-controls="sidebarPeople">
                                <i class="ri-team-fill"></i> <span data-key="t-apps">Volunteer</span>
                            </a>
                            <div class="collapse menu-dropdown {{ Route::is('back.people-list.index') || Route::is('back.people-list.create') || Route::is('back.people-list.edit') || Route::is('back.people.index') || Route::is('back.people.edit') ? 'show' : '' }}"
                                id="sidebarPeople">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="{{ route('back.people-list.index') }}"
                                            class="nav-link {{ Route::is('back.people-list.index') ? 'active' : '' }}"
                                            data-key="t-mailbox"> All </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('back.people-list.create') }}"
                                            class="nav-link {{ Route::is('back.people-list.create') ? 'active' : '' }}"
                                            data-key="t-mailbox"> Create </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('back.people.index') }}"
                                            class="nav-link {{ Route::is('back.people.create') || Route::is('back.people.edit') ? 'active' : '' }}"
                                            data-key="t-mailbox"> Category </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('back.alumni.index') || Route::is('back.alumni.create') || Route::is('back.alumni.edit') ? 'active' : 'collapsed' }}"
                                href="#sidebarAlumni" data-bs-toggle="collapse" role="button"
                                aria-expanded="{{ Route::is('back.alumni.index') || Route::is('back.alumni.create') || Route::is('back.alumni.edit') ? 'true' : 'false' }}"
                                aria-controls="sidebarAlumni">
                                <i class="ri-user-star-fill"></i> <span data-key="t-apps">Donor</span>
                            </a>
                            <div class="collapse menu-dropdown {{ Route::is('back.alumni.index') || Route::is('back.alumni.create') || Route::is('back.alumni.edit') ? 'show' : '' }}"
                                id="sidebarAlumni">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="{{ route('back.alumni.index') }}"
                                            class="nav-link {{ Route::is('back.alumni.index') ? 'active' : '' }}"
                                            data-key="t-mailbox"> All </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('back.alumni.create') }}"
                                            class="nav-link {{ Route::is('back.alumni.create') ? 'active' : '' }}"
                                            data-key="t-mailbox"> Create </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('back.notice-board.index') || Route::is('back.notice-board.create') || Route::is('back.notice-board.edit') ? 'active' : 'collapsed' }}"
                                href="#sidebarNotice" data-bs-toggle="collapse" role="button"
                                aria-expanded="{{ Route::is('back.notice-board.index') || Route::is('back.notice-board.create') || Route::is('back.notice-board.edit') ? 'true' : 'false' }}"
                                aria-controls="sidebarNotice">
                                <i class="ri-artboard-line"></i> <span data-key="t-apps">Notice Board</span>
                            </a>
                            <div class="collapse menu-dropdown {{ Route::is('back.notice-board.index') || Route::is('back.notice-board.create') || Route::is('back.notice-board.edit') ? 'show' : '' }}"
                                id="sidebarNotice">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="{{ route('back.notice-board.index') }}"
                                            class="nav-link {{ Route::is('back.notice-board.index') ? 'active' : '' }}"
                                            data-key="t-mailbox"> All </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('back.notice-board.create') }}"
                                            class="nav-link {{ Route::is('back.notice-board.create') ? 'active' : '' }}"
                                            data-key="t-mailbox"> Create </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('back.galleries.index') || Route::is('back.galleries.create') || Route::is('back.galleries.edit') || Route::is('back.galleries.category') ? 'active' : 'collapsed' }}"
                                href="#sidebarMedia" data-bs-toggle="collapse" role="button"
                                aria-expanded="{{ Route::is('back.galleries.index') || Route::is('back.galleries.create') || Route::is('back.galleries.edit') || Route::is('back.galleries.category') ? 'true' : 'false' }}"
                                aria-controls="sidebarMedia">
                                <i class="ri-gallery-line"></i> <span data-key="t-pages">Media</span>
                            </a>
                            <div class="collapse menu-dropdown {{ Route::is('back.galleries.index') || Route::is('back.galleries.create') || Route::is('back.galleries.edit') || Route::is('back.galleries.category') ? 'show' : '' }}"
                                id="sidebarMedia">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="{{ route('back.galleries.index') }}"
                                            class="nav-link {{ Route::is('back.galleries.index') || Route::is('back.galleries.edit') ? 'active' : '' }}"
                                            data-key="t-starter"> Media </a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{ route('back.galleries.category') }}"
                                            class="nav-link {{ Route::is('back.galleries.category') ? 'active' : '' }}"
                                            data-key="t-starter"> Category </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('back.pages.index') || Route::is('back.pages.create') || Route::is('back.pages.edit') ? 'active' : 'collapsed' }}"
                                href="#sidebarPages" data-bs-toggle="collapse" role="button"
                                aria-expanded="{{ Route::is('back.pages.index') || Route::is('back.pages.create') || Route::is('back.pages.edit') ? 'true' : 'false' }}"
                                aria-controls="sidebarPages">
                                <i class="ri-book-open-line"></i> <span data-key="t-pages">Pages</span>
                            </a>
                            <div class="collapse menu-dropdown {{ Route::is('back.pages.index') || Route::is('back.pages.create') || Route::is('back.pages.edit') ? 'show' : '' }}"
                                id="sidebarPages">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="{{ route('back.pages.index') }}"
                                            class="nav-link {{ Route::is('back.pages.index') ? 'active' : '' }}"
                                            data-key="t-starter"> All </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('back.pages.create') }}"
                                            class="nav-link {{ Route::is('back.pages.create') ? 'active' : '' }}"
                                            data-key="t-starter"> Create </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('back.menus.index') ? 'active' : '' }}"
                                href="{{ route('back.menus.index') }}">
                                <i class="ri-menu-add-line"></i> <span data-key="t-widgets">Menus</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('back.frontend.general') || Route::is('back.sliders.index') || Route::is('back.media.settings') || Route::is('back.frontend.section') || Route::is('back.footer-widgets.index') || Route::is('back.footer-widgets.edit') ? 'active' : 'collapsed' }}"
                                href="#sidebarUI" data-bs-toggle="collapse" role="button"
                                aria-expanded="{{ Route::is('back.frontend.general') || Route::is('back.sliders.index') || Route::is('back.media.settings') || Route::is('back.frontend.section') || Route::is('back.footer-widgets.index') || Route::is('back.footer-widgets.edit') ? 'true' : 'false' }}"
                                aria-controls="sidebarUI">
                                <i class="ri-settings-5-line"></i> <span data-key="t-base-ui">Settings</span>
                            </a>
                            <div class="collapse menu-dropdown mega-dropdown-menu {{ Route::is('back.frontend.general') || Route::is('back.sliders.index') || Route::is('back.media.settings') || Route::is('back.frontend.section') || Route::is('back.footer-widgets.index') || Route::is('back.footer-widgets.edit') ? 'show' : '' }}"
                                id="sidebarUI">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{{ route('back.frontend.general') }}"
                                                    class="nav-link {{ Route::is('back.frontend.general') ? 'active' : '' }}"
                                                    data-key="t-alerts">General Settings</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('back.sliders.index') }}"
                                                    class="nav-link {{ Route::is('back.sliders.index') ? 'active' : '' }}"
                                                    data-key="t-colors">Slider</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('back.media.settings') }}"
                                                    class="nav-link {{ Route::is('back.media.settings') ? 'active' : '' }}"
                                                    data-key="t-cards">Media</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('back.frontend.section') }}"
                                                    class="nav-link {{ Route::is('back.frontend.section') ? 'active' : '' }}"
                                                    data-key="t-carousel">Section</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('back.footer-widgets.index') }}"
                                                    class="nav-link {{ Route::is('back.footer-widgets.index') || Route::is('back.footer-widgets.edit') ? 'active' : '' }}"
                                                    data-key="t-carousel">Footer Widgets</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('back.request-contact.index') || Route::is('back.request-contact.edit') ? 'active' : '' }}"
                                href="{{ route('back.request-contact.index') }}">
                                <i class="ri-contacts-book-line"></i> <span data-key="t-widgets">Contact Form
                                    Request</span>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Route::is('back.admins.index') || Route::is('back.admins.edit') || Route::is('back.admins.create') || Route::is('back.role.index') || Route::is('back.role.create') || Route::is('back.role.edit') || Route::is('back.permission.index') || Route::is('back.permission.create') || Route::is('back.permission.edit') ? 'active' : 'collapsed' }}"
                                href="#sidebarUsers" data-bs-toggle="collapse" role="button"
                                aria-expanded="{{ Route::is('back.admins.index') || Route::is('back.admins.edit') || Route::is('back.admins.create') || Route::is('back.role.index') || Route::is('back.role.create') || Route::is('back.role.edit') || Route::is('back.permission.index') || Route::is('back.permission.create') || Route::is('back.permission.edit') ? 'true' : 'false' }}"
                                aria-controls="sidebarUsers">
                                <i class="ri-account-box-line"></i> <span data-key="t-pages">Admin</span>
                            </a>
                            <div class="collapse menu-dropdown {{ Route::is('back.admins.index') || Route::is('back.admins.edit') || Route::is('back.admins.create') || Route::is('back.role.index') || Route::is('back.role.create') || Route::is('back.role.edit') || Route::is('back.permission.index') || Route::is('back.permission.create') || Route::is('back.permission.edit') ? 'show' : '' }}"
                                id="sidebarUsers">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="{{ route('back.admins.index') }}"
                                            class="nav-link {{ Route::is('back.admins.index') || Route::is('back.admins.edit') || Route::is('back.admins.create') ? 'active' : '' }}"
                                            data-key="t-starter"> Users </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('back.role.index') }}"
                                            class="nav-link {{ Route::is('back.role.index') || Route::is('back.role.edit') || Route::is('back.role.create') ? 'active' : '' }}"
                                            data-key="t-starter"> Role </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('back.permission.index') }}"
                                            class="nav-link {{ Route::is('back.permission.index') || Route::is('back.permission.edit') || Route::is('back.permission.create') ? 'active' : '' }}"
                                            data-key="t-starter"> Permission </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            @if (isset($errors))
                @include('extra.error-validation')
            @endif
            @if (session('success'))
                @include('extra.success')
            @endif
            @if (session('error'))
                @include('extra.error')
            @endif

            @yield('master')


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Al-Khair.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Website Developed BY <a href="https://github.com/arifhossainsarker/al-khair-charity-website">Arif</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('back/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('back/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('back/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('back/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('back/assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('back/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('back/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('back/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('back/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('back/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!--data table-->
    <script src="{{ asset('plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-select/js/dataTables.select.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js "></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Select2 -->
    <!--data table-->

    <!-- App js -->
    <script src="{{ asset('back/assets/js/app.js') }}"></script>

    <!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.0/dist/sweetalert2.all.min.js"></script>

    <script src="{{ asset('back/js/main.js') }}"></script>

    @if (session('success-alert'))
        <script>
            cAlert('success', "{{ session('success-alert') }}");
        </script>
    @endif

    @if (session('error-alert'))
        <script>
            cAlert('error', "{{ session('error-alert') }}");
        </script>
    @endif

    @if (session('error-alert2'))
        <script>
            Swal.fire(
                'Failed!',
                '{{ session('error-alert2') }}',
                'error'
            )
        </script>
    @endif

    @if (session('success-alert2'))
        <script>
            Swal.fire(
                'Success!',
                '{{ session('success-alert2') }}',
                'success'
            )
        </script>
    @endif

    @if (session('error-transaction'))
        <script>
            Swal.fire(
                'Transaction Failed!',
                '{{ session('error-transaction') }}',
                'error'
            )
        </script>
    @endif

    @yield('footer')

</body>

</html>
