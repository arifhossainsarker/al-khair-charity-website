@extends('front.layouts.master')
@php
    $page_title="Donations";

@endphp
@section('head')
    @include('meta::manager', [
        'title' => 'Donations - ' . ($settings_g['slogan'] ?? '')
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

    {{-- publication section start --}}
    <section class="bg-gray-100 py-10">
        <div class="container">
            {{-- Donation Category Section --}}
            <div class=" bg-gray-300 pt-16 pb-16">
                <div class="container">
                    <div class="md:grid md:grid-cols-4 lg:grid-cols-4 md:gap-4 lg:mr-5 mb-8">
                        @foreach ($categories as $donation)
                        <div class="pl-4 pt-4 pb-4">
                            <div class="">
                                <div class="">
                                    @if ($donation->image)
                                        <a href="{{ route('single-donation',$donation->slug ) }}">
                                            <img class="object-cover mr-5"
                                            src="{{ $donation->img_paths['small'] }}" alt="">
                                        </a>
                                    @endif
                                </div>
                                <div class=" bg-lime-600 p-5 hover:bg-blue-900">
                                    <a class=" text-white font-bold text-2xl" href="{{ route('single-donation',$donation->slug ) }}">{{ $donation->title }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
            {{-- Donation Category Section end --}}
        </div>
    </section>
@endsection
