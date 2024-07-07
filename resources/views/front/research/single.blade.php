@extends('front.layouts.master')

@section('head')
    @include('meta::manager', [
        'title' => $research->title . ' - ' . ($settings_g['title'] ?? env('APP_NAME')),
    ])
@endsection

@section('master')
    <!-- Breadcrumb -->
    @include('front.include.breadcrumb', [
        'page_title' => $research->title,
        // 'data' => $product->ProductData,
        // 'expire_date' => $product->expire_date ?? null,
    ])
    <!-- End Breadcrumb -->

    {{-- page section start --}}
    <section class="bg-gray-100 py-20">
        <div class="container">
            <div class="p-10 border border-gray-200 rounded-lg">
                <div class="p-5">
                    <div>
                        <img class=" h-full w-full rounded-lg" src="{{ $research->img_paths['original'] }}" alt="">
                    </div>
                    <div class=" py-2">
                        {{-- <span class="primary-color text-xs font-semibold py-4">{{ \Carbon\Carbon::parse($research->created_at)->format('d-M-Y') }}</span> --}}
                        <h2 class="pt-2 primary-color text-base font-semibold pb-2">
                            {{ $research->title }}
                        </h2>
                        <div class=" text-gray-500 text-sm font-normal mb-4">
                            {!! $research->description !!}
                        </div>
                        @if ($research->pdf_file)
                            <div class="">
                                <embed class="h-screen w-full" src="{{ $research->pdf_file }}#toolbar=1"
                                    type="application/pdf" />
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- page section end --}}
@endsection

@section('footer')
@endsection
