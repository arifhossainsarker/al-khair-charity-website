@extends('front.layouts.master')
@php
    $page_title = 'Alumni';
    // $researches=\App\Models\Alumni::where(['status' => 1])->OrderBy('created_at', 'ASC')->paginate(12);
    $researches = \App\Models\Alumni::where(['status' => 1])
        ->select('batch_no')
        ->distinct('batch_no')
        ->get();
@endphp

@section('head')
    @include('meta::manager', [
        'title' => 'Alumni' . ' - ' . ($settings_g['title'] ?? env('APP_NAME')),
    ])

    <style>
        .batch-number a {
            font-size: 18px;
            font-weight: 600;
            color: #040158;
            line-height: 35px;
            text-decoration: underline;
        }
    </style>
@endsection

@section('master')
    <!-- Breadcrumb -->
    @include('front.include.breadcrumb', [
        'page_title' => $page_title,
        // 'data' => $product->ProductData,
        // 'expire_date' => $product->expire_date ?? null,
    ])
    <!-- End Breadcrumb -->

    {{-- page section start --}}
    <section class="bg-gray-100 py-20">
        <div class="container">
            <div class="p-10 border border-gray-200 rounded-lg bg-white">
                @foreach ($researches as $research)
                    <div class="batch-number">
                        <a href="{{ route('single_alumni', $research->batch_no) }}">
                            {{ $research->batch_no }}
                        </a>
                    </div>
                @endforeach
                {{-- <div class="md:grid md:grid-cols-2 lg:grid-cols-4 md:gap-4">

                    @foreach ($researches as $research)
                        <div class="border border-gray-200 p-2 rounded-md mb-5 md:mb-0 text-center">
                            <div>
                                <img class=" h-48 w-48 rounded-full mx-auto" src="{{ $research->img_paths['original'] }}"
                                    alt="">
                            </div>
                            <div class=" py-2">
                                <h2 class="pt-2 primary-color text-base font-semibold pb-2">
                                    {{ $research->name }}
                                </h2>
                                <h4 class="mt-2 text-xs font-bold primary-color">
                                    {{ $research->designation }}
                                </h4>

                            </div>
                        </div>
                    @endforeach
                </div> --}}
                <div>
                    {{-- {{ $researches->links() }} --}}
                </div>
            </div>
        </div>
    </section>
    {{-- page section end --}}
@endsection

@section('footer')
@endsection
