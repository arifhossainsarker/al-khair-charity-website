@extends('front.layouts.master')

@section('head')
    @include('meta::manager', [
        'title' => $event->title . ' - ' . ($settings_g['title'] ?? env('APP_NAME'))
    ])
@endsection

@section('master')
<!-- Breadcrumb -->
@include('front.include.breadcrumb', [
    'page_title' => $event->title,
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
                    <img class=" h-full w-full rounded-lg" src="{{ $event->img_paths['original'] }}" alt="">
                </div>
                <div class=" py-2">
                    <span class="primary-color text-xs font-semibold py-4">Event Date: {{ \Carbon\Carbon::parse($event->start_date)->format('d-M-Y h:i A') }}
                        -
                        {{ \Carbon\Carbon::parse($event->end_date)->format('d-M-Y h:i A') }}</span>
                    <h2 class="pt-2 primary-color text-base font-semibold pb-2">
                        {{ $event->title }}
                    </h2>
                    <div class=" text-gray-500 text-sm font-normal mb-4">
                        {!! $event->description !!}
                    </div>
                   <div class=" text-blue-900 font-semibold text-lg">
                        Address: {!! $event->location_address !!}
                   </div>
                   <div class=" mt-5">
                    <iframe src="{{ $event->location_map }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
