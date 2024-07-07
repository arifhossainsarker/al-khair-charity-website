@extends('front.layouts.master')
@php
    $page_title='Media';
@endphp
@section('head')
    @include('meta::manager', [
        'title' => 'Gallery - ' . ($settings_g['slogan'] ?? '')
    ])
    @php
        $galleries = \App\Models\Gallery::orderBy('position', 'DESC')
        ->active()
        ->get();
    @endphp

@endsection

@section('master')
    <!-- Breadcrumb -->
    @include('front.include.breadcrumb', [
    'page_title' => $page_title,
    // 'data' => $product->ProductData,
    // 'expire_date' => $product->expire_date ?? null,
    ])
    <!-- End Breadcrumb -->

    {{-- gallery section start --}}
    <section class="py-20 bg-gray-100">
        <div class="container">

            <div class="mt-10 lg:flex lg:space-x-0 lg:flex-wrap">
                @foreach ($galleries as $gallery)
                    <div class="w-full lg:w-1/3 mb-5 pl-5 card">
                        <div class="overflow-hidden ovelay">
                            <img class="h-60 w-full object-cover" src="{{$gallery->img_paths['small']}}" alt="{{$gallery->name}}">
                        </div>
                        <div class="py-10 px-5 card-desc">
                            {{-- <span class="text-xs text-white font-bold">{{date('d M, Y', strtotime($gallery->created_at))}}</span> --}}
                            <h2 class="py-10 px-2 text-base font-medium text-white uppercase">{{$gallery->name}}</h2>
                            <a class="text-sm text-sky-400 hover:text-sky-500" href="{{route('gallery.single',$gallery->name)}}">View Details <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('footer')

@endsection
