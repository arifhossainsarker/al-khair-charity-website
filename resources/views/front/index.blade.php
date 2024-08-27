@extends('front.layouts.master')

@section('head')
    @include('meta::manager', [
        'title' => ($settings_g['title'] ?? env('APP_NAME')) . ' - ' . ($settings_g['slogan'] ?? ''),
    ])
@endsection

@section('master')
    @if (count($home_sections))
        {{-- Welcome area start --}}
        @foreach ($home_sections as $key => $sec)
            @if ($sec->section_design_type_id == 7)
                <div class="bg-white">
                    <div class="lg:flex border-t border-gray-500">
                        <!-- welcome slider -->
                        <div class="w-full">
                            <div class="slider-area">
                                <!-- single slider -->
                                @foreach ($sliders as $key => $slider)
                                    @if ($slider->slider_type == 1)
                                        <div class="relative">
                                            <img class="custom-slider-h-400" src="{{ $slider->img_paths['original'] }}"
                                                alt="">
                                            <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 p-10 w-full">
                                                <p class=" text-white text-lg">{{ $slider->text_1 }}</p>
                                            </div>
                                        </div>
                                    @elseif($slider->slider_type == 2)
                                        <div class="relative">
                                            <video class="img-fluid" autoplay loop muted>
                                                <source src="{{ $slider->video }}" type="video/mp4" />
                                            </video>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                {{-- Welcome area end --}}

                {{-- Donation Category Section --}}
                <div class=" bg-gray-300 pt-16 pb-16">
                    <div class="container">
                        <div class="md:grid md:grid-cols-4 lg:grid-cols-4 md:gap-4 lg:mr-5 mb-8">
                            @foreach ($categories as $donation)
                            @if ($donation->feature == 0)
                            <div class="pl-4 pt-4 pb-4">
                                <div class="">
                                    <div class="">
                                        @if ($donation->image)
                                        <a href="{{ route('single-donation',$donation->slug ) }}">
                                            <img class="object-cover mr-5"
                                            src="{{ $donation->img_paths['small'] }}" alt="">
                                        </a>
                                        @endif
                                    </div>
                                    <div class=" bg-lime-600 p-5 hover:bg-blue-900">
                                        <a class=" text-white font-bold text-2xl" href="{{ route('single-donation',$donation->slug ) }}">{{ $donation->title }}</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach



                        </div>
                    </div>
                </div>
                {{-- Donation Category Section end --}}

                {{-- About us Section --}}
                <div class=" bg-white pt-16 pb-16">
                    <div class="container">
                        <div class=" md:grid md:grid-cols-2 lg:grid-cols-2 lg:mr-5 mb-8">
                            {{-- about content section --}}
                             <div class="about">
                                <span class=" text-blue-900 text-base">SINCE 2003</span>
                                <h2 class=" text-black font-semibold text-5xl pt-5 pb-6">Balance Without Compromise</h2>
                                <p>Al-Khair Foundation is a leading faith-based UK charity which provides emergency relief and developmental support in some of the world’s most impoverished areas. With an aid delivery footprint spanning 74 countries, we have alleviated the suffering of over 50 million beneficiaries in one way or another.</p>

                                <p class="pt-10 pb-4 ">
                                    <a class="px-4 py-4 text-white rounded bg-blue-900 hover:bg-blue-700"
                                        href="">Lern More</a>
                                </p>

                             </div>

                             {{-- about image section --}}
                             <div class="md:grid md:grid-cols-2 lg:grid-cols-2 lg:mr-5 mb-8">
                                <div class="pl-4 pt-4 pb-4">
                                    <div class="">
                                        <div class="">
                                            <img class="object-cover mr-5"
                                                src="https://alkhair.org/wp-content/themes/akf/assets/images/ab-1.jpg" alt="">
                                        </div>
                                        <div class=" bg-lime-600 p-2 hover:bg-blue-900">
                                            <a class=" text-white font-semibold text-xl" href="http://al-khair.test/page/about-us">Our Story</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="pl-4 pt-4 pb-4">
                                    <div class="">
                                        <div class="">
                                            <img class="object-cover mr-5"
                                                src="https://alkhair.org/wp-content/themes/akf/assets/images/ab-2.jpg" alt="">
                                        </div>
                                        <div class=" bg-lime-600 p-2 hover:bg-blue-900">
                                            <a class=" text-white font-semibold text-xl" href="http://al-khair.test/page/who-we-are">What We Do</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="pl-4 pt-4 pb-4">
                                    <div class="">
                                        <div class="">
                                            <img class="object-cover mr-5"
                                                src="https://alkhair.org/wp-content/themes/akf/assets/images/ab-3.jpg" alt="">
                                        </div>
                                        <div class=" bg-lime-600 p-2 hover:bg-blue-900">
                                            <a class=" text-white font-semibold text-xl" href="http://al-khair.test/page/our-mission">Vision & Mission</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="pl-4 pt-4 pb-4">
                                    <div class="">
                                        <div class="">
                                            <img class="object-cover mr-5"
                                                src="https://alkhair.org/wp-content/themes/akf/assets/images/ab-4.jpg" alt="">
                                        </div>
                                        <div class=" bg-lime-600 p-2 hover:bg-blue-900">
                                            <a class=" text-white font-semibold text-xl" href="http://al-khair.test/page/who-we-are">Who We Are</a>
                                        </div>
                                    </div>
                                </div>

                             </div>

                        </div>
                    </div>
                </div>
                {{-- About us Section end --}}

                {{-- Donation Category Section --}}
                 <div class=" bg-gray-300 pt-16 pb-16">
                    <div class="container">
                        <h2 class=" text-black font-semibold pt-3 pb-4 text-xl">Freature Donations</h2>
                        <div class="md:grid md:grid-cols-4 lg:grid-cols-4 md:gap-4 lg:mr-5 mb-8">

                            @foreach ($categories as $donation)
                                @if ($donation->feature == 1)
                                <div class="pl-4 pt-4 pb-4">
                                    <div class="">
                                        <div class="">
                                            @if ($donation->image)
                                            <a href="{{ route('single-donation',$donation->slug ) }}">
                                                <img class="object-cover mr-5"
                                                src="{{ $donation->img_paths['small'] }}" alt="">
                                            </a>
                                            @endif
                                        </div>
                                        <div class=" bg-lime-600 p-5 hover:bg-blue-900">
                                            <a class=" text-white font-bold text-2xl" href="{{ route('single-donation',$donation->slug ) }}">{{ $donation->title }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
                {{-- Donation Category Section end --}}

                {{-- News Section --}}
                <div class=" bg-white pt-16 pb-16">
                    <div class="container">

                        <div class=" text-center">
                            <span class=" text-blue-900 text-base">Our Activities</span>
                            <h2 class=" text-black font-semibold text-5xl pt-3 pb-4">Our latest news</h2>
                        </div>
                        <div class="md:grid md:grid-cols-4 lg:grid-cols-4 md:gap-4 lg:mr-5 mb-8">
                            @foreach ($news as $new)
                            <div class="pl-4 pt-4 pb-4">
                                <div class="">
                                    <div class="">
                                        @if ($new->image)
                                            <img
                                                src="{{ $new->img_paths['small'] }}" alt="">
                                        @endif
                                    </div>
                                    <div class=" bg-lime-600 p-5 hover:bg-blue-900">
                                        <a class=" text-white font-bold text-2xl" href="{{ route('single-news', $new->slug) }}">{{ $new->title }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <p class="pt-10 pb-4 flex justify-center">
                            <a class="px-4 py-3 btn-bg text-white rounded hover:bg-blue-900 hover:text-yellow-300"
                                href="/page/news">View
                                All</a>
                        </p>
                    </div>
                </div>
                {{-- News Section end --}}

            @endif
        @endforeach
    @endif
@endsection

@section('footer')
@endsection
