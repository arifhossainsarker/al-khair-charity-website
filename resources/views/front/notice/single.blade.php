@extends('front.layouts.master')

@section('head')
    @include('meta::manager', [
        'title' => $notice->title . ' - ' . ($settings_g['title'] ?? env('APP_NAME'))
    ])
@endsection

@section('master')
<!-- Breadcrumb -->
@include('front.include.breadcrumb', [
    'page_title' => $notice->title,
    // 'data' => $product->ProductData,
    // 'expire_date' => $product->expire_date ?? null,
])
<!-- End Breadcrumb -->

{{-- page section start --}}
<section class="bg-gray-100 py-20">
    <div class="container">
       <div class="p-10 border border-gray-200 rounded-lg">
            <div class="p-5">
                <div class=" py-2">
                    <span class="primary-color text-xs font-semibold py-4">{{ \Carbon\Carbon::parse($notice->created_at)->format('d-M-Y') }} </span>

                    <h2 class="pt-2 primary-color text-base font-semibold pb-2">
                        {{ $notice->title }}
                    </h2>
                    <div class=" text-gray-500 text-sm font-normal mb-4">
                        {!! $notice->description !!}
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>
{{-- page section end --}}


@endsection

@section('footer')

@endsection
