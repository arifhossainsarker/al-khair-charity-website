@extends('front.layouts.master')
@php
    $page_title="Notice";
    $researches=\App\Models\NoticeBoard::where(['status' => 1])->OrderBy('created_at', 'DESC')->paginate(12);
@endphp

@section('head')
    @include('meta::manager', [
        'title' => 'Notice' . ' - ' . ($settings_g['title'] ?? env('APP_NAME'))
    ])
@endsection

@section('master')
<!-- Breadcrumb -->
@include('front.include.breadcrumb', [
    'page_title' => 'Notice',
    // 'data' => $product->ProductData,
    // 'expire_date' => $product->expire_date ?? null,
])

<!-- End Breadcrumb -->

{{-- page section start --}}
<section class="bg-gray-100 py-20">
    <div class="container">
       <div class="border border-gray-200 rounded-lg">
            <div class="md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-4">
                {{-- single research section --}}
                @foreach ($researches as $research)
                <div class="border border-gray-200 p-2 rounded-md mb-5 md:mb-0">
                    <div class=" py-2">
                        <span class="primary-color text-xs font-semibold py-4">{{ \Carbon\Carbon::parse($research->created_at)->format('d-M-Y') }}</span>
                        <h2 class="pt-2 primary-color text-base font-semibold pb-2">
                            <a href="{{ route('single-notice', $research->slug) }}">{{ $research->title }}</a>
                        </h2>
                        <div class=" text-gray-500 text-sm font-normal mb-4">
                            {!! \Illuminate\Support\Str::limit($research->description, 200) !!}
                        </div>
                        <a class="primary-color text-xs font-bold hover:underline" href="{{ route('single-notice', $research->slug) }}">Read More</a>
                        @if($research->notice_file != null)
                        <a class="ml-3 primary-color text-xs font-bold hover:underline" href="{{ asset('uploads/notice/'.$research->notice_file) }}"> 
                            Download File</a>
                        @endif

                    </div>
                </div>
                @endforeach
            </div>
            <div>
                {{ $researches->links() }}
            </div>
       </div>
    </div>
</section>
{{-- page section end --}}


@endsection

@section('footer')

@endsection
