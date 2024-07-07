@extends('front.layouts.master')

@section('head')
    @include('meta::manager', [
        'title' => $news->title . ' - ' . ($settings_g['title'] ?? env('APP_NAME'))
    ])
@endsection

@section('master')
<!-- Breadcrumb -->
@include('front.include.breadcrumb', [
'page_title' => $news->title,
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
                    <img class=" h-full w-full rounded-lg" src="{{ $news->img_paths['original'] }}" alt="">
                </div>
                <div class=" py-2">
                    <span class="primary-color text-xs font-semibold py-4">{{ \Carbon\Carbon::parse($news->publish_date)->format('d-M-Y') }}</span>
                    <h2 class="pt-2 primary-color text-base font-semibold pb-2">
                        {{ $news->title }}
                    </h2>
                    <div class=" text-gray-500 text-sm font-normal mb-4">
                        {!! $news->description !!}
                    </div>
                    @if ($news->video_embade_code)
                        <div class="">
                            {{$news->video_embade_code}}
                        </div>
                    @elseif ($news->video)
                        <div class="overflow-hidden">
                            <video class="h-52 w-full bg-white"  controls="controls" autoplay loop muted>
                                <source src="{{ asset($news->video) }}" type="video/mp4" />
                            </video>
                        </div>
                    @endif
                    <div class="p-4 border border-gray-200 mt-10 w-1/5">
                        <span class="primary-color text-xs"><b class="font-black">Source : </b><a href="{{ $news->source_link }}">{{ $news->source_name }}</a></span>
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
