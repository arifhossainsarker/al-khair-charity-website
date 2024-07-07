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
                <div class="container bg-white">
                    <div class="lg:flex mt-5 pb-10 border-t border-gray-500">
                        <!-- welcome slider -->
                        <div class="lg:w-1/2 w-full">
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
                        <!-- welcome content -->
                        <div class="lg:w-1/2 w-full px-6">
                            <h2 class=" py-8 uppercase text-3xl primary-color">{{ $sec->title }}</h2>
                            <div class=" text-gray-500 text-lg leading-8 pr-10 text-justify">
                                {!! \Illuminate\Support\Str::limit($sec->description, 800) !!}
                            </div>
                            <p class="pt-4 pb-10">
                                <a class="px-4 py-3 btn-bg text-white rounded hover:bg-blue-900 hover:text-yellow-300"
                                    href="{{ $sec->button_url }}">
                                    {{ $sec->button_name }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Welcome area end --}}
            @elseif ($sec->section_design_type_id == 2)
                {{-- Event section start --}}
                <div class="container bg-white">
                    <div class="container-box">
                        <div class="pt-2 pb-2 primary-bg flex justify-between">
                            @if ($sec->section_name_is_show)
                                <h2 class="font-bold text-white ml-5">{{ $sec->section_name }}</h2>
                            @endif
                            <span class="text-white mr-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                </svg>
                            </span>
                        </div>
                        <div class="">

                            <!-- News area -->
                            <div class="md:grid md:grid-cols-2 lg:grid-cols-2 md:gap-4 lg:mr-5 shadow-lg mb-8">
                                <!-- single news -->
                                @foreach ($news as $new)
                                    {{-- @if ($new->category->slug == 'news') --}}
                                    <div class="pl-4 pt-4 pb-4 border-b-2 custom-b-color">
                                        <h2 class="mt-5 mb-5 primary-color">
                                            <a href="{{ route('single-news', $new->slug) }}">{{ $new->title }}</a>
                                        </h2>
                                        <div class="flex">
                                            @if ($new->image)
                                                <img class="h-20 w-20 object-cover mr-5"
                                                    src="{{ $new->img_paths['small'] }}" alt="">
                                            @endif
                                            <div>
                                                <span
                                                    class=" text-gray-500 text-sm mb-3">{{ \Carbon\Carbon::parse($new->publish_date)->format('d-M-Y') }}</span>
                                                <div class=" text-gray-500 text-base text-justify pr-2">
                                                    {!! \Illuminate\Support\Str::limit($new->description, 200) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- @endif --}}
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="pt-10 pb-4 flex justify-center">
                            <a class="px-4 py-3 btn-bg text-white rounded hover:bg-blue-900 hover:text-yellow-300"
                                href="/page/news">View
                                All</a>
                        </p>
                    </div>
                </div>
                {{-- Event section end --}}

                {{-- Tab area start --}}
            @elseif ($sec->section_design_type_id == 9)
                <div class="container mx-auto py-10 bg-white" x-data="{ selected: 'option-2' }">
                    @if ($sec->section_name_is_show)
                        <h2 class="flex justify-center primary-color font-bold text-3xl uppercase my-5">
                            {{ $sec->section_name }}</h2>
                    @endif

                    <ul
                        class="lg:flex lg:justify-center lg:space-x-12 space-y-5 lg:space-y-0 md:grid md:grid-cols-3 md:gap-2 md:space-y-0 text-white">
                        @foreach ($researchs as $research)
                            <li>
                                <button x-on:click="selected = 'option-{{ $research->id }}'"
                                    class="inline-block px-4 py-3 nav-bg rounded uppercase hover:bg-blue-900 hover:text-yellow-300"
                                    x-bind:class="{ 'bg-blue-900 text-yellow-300': selected === 'option-{{ $research->id }}' }">
                                    {{ $research->title }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="p-3 mt-6 bg-white border">
                        @foreach ($researchs as $research)
                            <div class="relative" x-show="selected === 'option-{{ $research->id }}'">
                                <img class="custom-h-600" src="{{ $research->img_paths['original'] }}" alt="">
                                <div class="absolute bottom-0 left-0 right-0 bg-blue-900 bg-opacity-50 py-10">
                                    <h4 class=" text-3xl font-bold text-center text-white">
                                        <a
                                            href="{{ route('single-research', $research->slug) }}">{{ $research->sub_title }}</a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Tab area end --}}
            @endif
        @endforeach
    @endif
@endsection

@section('footer')
@endsection
