@extends('front.layouts.master')
@php
    $page_title=$gallery->name;
@endphp
@section('head')
    @include('meta::manager', [
        'title' => $gallery->name.' - ' . ($settings_g['slogan'] ?? '')
    ])
@endsection
@section('master')
     <!-- Breadcrumb -->
     @include('front.include.breadcrumb', [
    'page_title' => $page_title,
    // 'data' => $product->ProductData,
    // 'expire_date' => $product->expire_date ?? null,
    ])
    <!-- End Breadcrumb -->
    <section class="bg-gray-100 py-20">
        <div class="container">
            <div class="md:flex md:flex-wrap lg:flex lg:flex-wrap">
                @foreach ($gallery->GalleryItems as $key => $item)
                    <div class="w-full md:w-1/2 lg:w-1/3 mb-5 md:pl-5">
                        @if ($item->image)
                            <div class="overflow-hidden">
                                <img class="h-52 w-full object-cover hover:scale-125 duration-1000" src="{{$item->img_paths['original']}}" alt="">
                            </div>
                            @if ($item->title)
                                <div class="bg-white py-2 px-5">
                                    <h2 class="py-2 text-base font-medium text-blue-900 uppercase">{{$item->title}}</h2>
                                </div>
                            @endif

                        @elseif ($item->video_embade_code)
                            <div class="overflow-hidden">
                                {!!$item->video_embade_code!!}
                            </div>
                            @if ($item->title)
                                <div class="bg-white py-2 px-5">
                                    <h2 class="py-2 text-base font-medium text-blue-900 uppercase">{{$item->title}}</h2>
                                </div>
                            @endif
                        @elseif ($item->video)
                            <div class="overflow-hidden">
                                <video class="h-52 w-full bg-white"  controls="controls" autoplay loop muted>
                                    <source src="{{ asset($item->video) }}" type="video/mp4" />
                                </video>
                            </div>
                            @if ($item->title)
                                <div class="bg-white py-2 px-5">
                                    <h2 class="py-2 text-base font-medium text-blue-900 uppercase">{{$item->title}}</h2>
                                </div>
                            @endif
                            @elseif ($item->pdf_file)
                            <div class="overflow-hidden h-52 w-full bg-white flex justify-center">
                                <a href="{{ route('document.view', $item->title) }}">
                                    <img class="h-52 w-52 object-cover hover:scale-125 duration-1000" src="{{asset('front/img/pdf.png')}}" alt="">
                                </a>
                            </div>
                            @if ($item->title)
                                <div class="bg-white py-2 px-5">
                                    <a href="{{ route('document.view', $item->title) }}"><h2 class="py-2 text-base font-medium text-blue-900 uppercase">{{$item->title}}</h2></a>
                                </div>
                            @endif
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('footer')

@endsection
