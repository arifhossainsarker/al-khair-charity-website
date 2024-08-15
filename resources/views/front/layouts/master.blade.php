<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@php
    $main_menu = App\Models\Menu::with('SingleMenuItems')
        ->where('name', 'Main Menu')
        ->active()
        ->first();
    $footer_menu = App\Models\Menu::with('SingleMenuItems')
        ->where('name', 'Footer')
        ->active()
        ->first();
    $socials = \App\Models\Settings::where(['group' => 'social'])->get();
    $service_types = \App\Models\ServiceType::where(['status' => 1])
        ->orderBy('position', 'ASC')
        ->get();
    $widgets = App\Models\Widget::with('Menu', 'Menu.SingleMenuItems')
        ->where('status', 1)
        ->where('placement', 'Footer')
        ->orderBy('position')
        ->take(3)
        ->get();
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ $settings_g['favicon'] ?? '' }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>@yield('title') - {{$settings_g['title'] ?? env('APP_NAME')}}</title> --}}

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/js/slick/slick.css') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* menu */
        .hoverable {
            position: static;
        }

        .main-menu {
            position: relative;
        }

        .hoverable .sub-menu {
            padding: 1px;
            width: max-content;
            display: none;
            position: absolute;
            top: 28px;
            z-index: 99999;
        }

        .hoverable .sub-menu .submenu {
            padding: 1px;
            width: max-content;
            display: none;
            position: absolute;
            top: 5px;
            z-index: 99999;
            left: 151px;
        }

        .hoverable .sub-menu .sub-menu .sub-menu {
            display: none;
            top: 5px;
            left: 228px;
        }

        .sub-menu a {
            color: #0066b3ba;
        }

        .main-menu .hoverable:hover>.sub-menu {
            display: block;
        }

        .main-menu .hoverable:hover>.submenu {
            display: block;
        }

        .hoverable ul li:nth-child(1) {
            border-top: 1px solid;
            border-bottom: 1px solid;
        }

        .hoverable ul li {
            border-bottom: 1px solid;
        }

        .hoverable ul li:hover>a {
            color: #326777;
        }





        .hoverable-sub>a:after {
            content: "\27A4";
            font-size: 10px;
            padding-left: 6px;

            top: -1px;
        }



        /* end menu */
    </style>
    @yield('head')

</head>

<body class="">
    <div class="app">
        {{-- Header area start --}}
        <header class="nav-bg">
            <!-- Top Header Start -->
            <div class="container">
                <div class="">
                    <div class="py-6 flex justify-between">
                        <div class="flex">
                            <div class="pr-5">
                                <a href="{{ route('homepage') }}">
                                    <img class="w-20" src="{{ $settings_g['logo'] ?? '' }}" alt="">
                                </a>
                            </div>
                            <div class="md:block hidden">
                                <div>
                                    <p class="pt-2 pb-2 ml-5 flex justify-center">
                                        <a class="px-5 py-3 bg-white text-red-500 font-semibold text-white rounded hover:bg-blue-900 hover:text-yellow-300"
                                            href="">Donation</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:flex hidden items-center">
                            <div class="container-box">
                                @if ($main_menu)
                                    <ul class="flex text-white  main-menu">
                                        <li><a class="px-4 text-lg {{ url('/') == url()->current() ? 'active' : '' }}"
                                                href="{{ route('homepage') }}">Home</a></li>

                                        @foreach ($main_menu->SingleMenuItems as $item)
                                            <li class="hoverable">
                                                <a class="px-4 text-lg"
                                                    href="{{ $item->menu_info['url'] }}">{{ $item->menu_info['text'] }}</a>
                                                @if (count($item->Items))
                                                    <div class="p-0 sub-menu mb-16 sm:mb-0 shadow-xl bg-white">
                                                        <ul>
                                                            @foreach ($item->Items as $item)
                                                                <li class="p-2 text-sm font-normal text-gray-400 hoverable">
                                                                    <a
                                                                        href="{{ $item->menu_info['url'] }}">{{ $item->menu_info['text'] }}</a>
                                                                    @if (count($item->Items))
                                                                        <ul
                                                                            class="submenu p-0 mb-16 sm:mb-0 shadow-xl bg-white">
                                                                            @foreach ($item->Items as $sub_sub_menu)
                                                                                @if ($sub_sub_menu->menu_info['text'])
                                                                                    <li
                                                                                        class="p-2 text-sm font-normal text-gray-400 hoverable">
                                                                                        <a
                                                                                            href="{{ $sub_sub_menu->menu_info['url'] }}">{{ $sub_sub_menu->menu_info['text'] }}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach
                                                                        </ul>
                                                                    @endif
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </li>
                                        @endforeach

                                    </ul>
                                @else
                                    <p class="text-danger text-right">Please create "Main Menu"</p>
                                @endif
                            </div>
                        </div>
                        <div class="lg:hidden text-right">
                            <button class="navbar-burger flex items-center text-black p-3">
                                <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Mobile menu</title>
                                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            {{-- mobile menu --}}
            <div class="navbar-menu relative z-50 hidden">
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                <nav
                    class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                    <div class="flex items-center justify-between mb-8">
                        {{-- logo area --}}
                        <div class="uppercase">
                            <img class="w-20" src="{{ $settings_g['logo'] ?? '' }}" alt="">
                        </div>
                        <button class="navbar-close">
                            <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ul>
                            <li class="mb-1">
                                <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded {{ url('/') == url()->current() ? 'active' : '' }}"
                                    href="{{ route('homepage') }}">Home</a>
                            </li>
                            @if ($main_menu)
                                @foreach ($main_menu->SingleMenuItems as $item)
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded {{ $item->menu_info['url'] == url()->current() ? 'active' : '' }}"
                                            href="{{ $item->menu_info['url'] }}">{{ $item->menu_info['text'] }}</a>
                                        @if (count($item->Items))
                                            <ul>
                                                @foreach ($item->Items as $item)
                                                    <li class="mb-1 ml-5">
                                                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded {{ $item->menu_info['url'] == url()->current() ? 'active' : '' }}"
                                                            href="{{ $item->menu_info['url'] }}">{{ $item->menu_info['text'] }}</a>
                                                        @if (count($item->Items))
                                                            <ul>
                                                                @foreach ($item->Items as $sub_sub_menu)
                                                                    @if ($sub_sub_menu->menu_info['text'])
                                                                        <li class="mb-1 ml-5">
                                                                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded {{ $item->menu_info['url'] == url()->current() ? 'active' : '' }}"
                                                                                href="{{ $sub_sub_menu->menu_info['url'] }}">{{ $sub_sub_menu->menu_info['text'] }}</a>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                    <div class="mt-auto">

                        <p class="my-4 text-xs text-center text-gray-400">
                            <span>Copyright &copy; {{ date('Y') }} | Noakhali Science and Technology University |
                                All Rights Reserved</span>
                        </p>
                    </div>
                </nav>
            </div>
        </header>
        {{-- Header area end --}}


        @yield('master')

        {{-- Footer area start --}}
        <footer>
            <!-- Footer Top Area -->
            <div class="footer-bg py-10">
                <div class="container">
                    <div class="lg:flex space-y-10 lg:space-y-0">
                        @foreach ($widgets as $widget)
                            <!-- single Footer -->
                            <div class="lg:w-1/4 lg:pr-10 w-full">
                                <h4 class=" text-white text-lg font-medium uppercase mb-8">{{ $widget->title }}</h4>
                                @if ($widget->type == 'Menu' && $widget->Menu)
                                    <ul class="leading-loose">
                                        @foreach ($widget->Menu->SingleMenuItems as $item)
                                            <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                                <a class=" text-sm text-gray-400"
                                                    href="{{ $item->menu_info['url'] }}">{{ $item->menu_info['text'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <div>
                                        {!! $widget->text !!}
                                    </div>
                                @endif
                            </div>
                        @endforeach


                        <!-- single Footer -->
                        <div class="lg:w-1/4 lg:pr-10 w-full">
                            <h4 class=" text-white text-lg font-medium uppercase mb-8">CONTACT & MAILING ADDRESS</h4>
                            <ul class="leading-loose pt-3">
                                <li class="pb-2 border-b border-gray-500 border-dotted w-full">
                                    <p class="text-sm text-gray-400 flex">
                                        <span class="mr-2 text-base">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                        </span>
                                        Postal Code: {{ $settings_g['zip'] ?? '' }}
                                    </p>
                                </li>
                                <li class="pb-2 border-b border-gray-500 border-dotted w-full">
                                    <p class="text-sm text-gray-400 py-2 flex">
                                        <span class="mr-2 text-base">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                        </span>
                                        Phone: {{ $settings_g['mobile_number'] ?? '' }}
                                    </p>
                                </li>
                                <li class="pb-2 border-b border-gray-500 border-dotted w-full">
                                    <p class="text-sm text-gray-400 py-1 flex">
                                        <span class="mr-2 text-base">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                            </svg>
                                        </span>
                                        Email: {{ $settings_g['email'] ?? '' }}
                                    </p>
                                </li>
                                <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                    <a class="text-sm text-gray-400 py-1 flex" href="/">
                                        <span class="mr-2 text-base flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                        </span>
                                        NSTU Diary Web Version
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer Area -->
            <div class="bottom-footer-bg py-6">
                <div class="container">
                    <div class="md:flex md:justify-between space-y-5 md:space-y-0">
                        <p class=" text-xs text-gray-400">Copyright © {{ date('Y') }} | Noakhali Science and
                            Technology University
                            | All Rights Reserved</p>
                        <ul class="flex md:justify-between">
                            <li>
                                <a class=" text-xs text-gray-400 font-bold border-r-2 border-gray-400 pr-4"
                                    href="/page/overview">Mission & Vision</a>
                            </li>
                            <li>
                                <a class=" text-xs text-gray-400 font-bold pl-4" href="/page/overview">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        {{-- Footer area end --}}

    </div>

    {{-- jquery file --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('frontend/js/slick/slick.min.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <script>
        //dropdown-menu
        $('.hoverable-sub').hover(function() {
            console.log($(this).index());
            console.log($(this).height());
            console.log($(this).children('.sub-menu'));
            if (parseInt($(this).index()) == 0) {
                $(this).children('.sub-menu').css('top', (parseInt($(this).index()) * parseInt($(this).height())));
            } else {
                $(this).children('.sub-menu').css('top', (parseInt($(this).index()) * 30) + 20);
            }

            $(this).children('.sub-menu').css('left', parseInt($(this).width()) + 17);
            console.log(parseInt($(this).width()));

        });
        $('.hoverable').hover(function() {
            console.log($(this).width());
            $(this).children('.sub-menu').css('min-width', $(this).width());
        })
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
    </script>

</body>

</html>
