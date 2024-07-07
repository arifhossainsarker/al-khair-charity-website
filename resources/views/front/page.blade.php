@extends('front.layouts.master')

@section('head')
    @include('meta::manager', [
        'title' => $page->title . ' - ' . ($settings_g['title'] ?? env('APP_NAME')),
        'image' => $page->media_id ? $page->img_paths['medium'] : null,
        'description' => $page->meta_description,
    ])
    <style>
        .text-base ul li {
            list-style: inside;
            line-height: 35px;
        }

        .text-base strong {
            font-weight: bold;
        }

        .text-base p {
            margin-bottom: 20px;
            font-size: 16px;
        }

        .text-base a {
            color: #040158;
            text-decoration: underline;
        }

        .page h3 img {
            margin: 0 auto;
        }

        .page h3 {
            text-align: center;
            font-size: 20px;
            line-height: 28px;
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('master')
    <!-- Breadcrumb -->
    @include('front.include.breadcrumb', [
        'page_title' => $page->title,
        // 'data' => $product->ProductData,
        // 'expire_date' => $product->expire_date ?? null,
    ])
    <!-- End Breadcrumb -->

    {{-- page section start --}}
    <section class="bg-gray-100 py-10">
        <div class="container">
            <div class="p-10 border border-gray-200 rounded-lg bg-white">
                @if ($page->media_id)
                    <div class="mb-10 w-1/2 mx-auto">
                        <img src="{{ $page->img_paths['large'] }}" class="h-full w-full object-cover"
                            alt="{{ $page->title }}">
                    </div>
                @endif
                <div class="page text-base font-normal mx-auto">
                    {!! $page->description !!}
                </div>
            </div>
        </div>
    </section>
    {{-- page section end --}}
@endsection

@section('footer')
@endsection
