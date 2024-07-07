@extends('front.layouts.master')
@php
    $socials = \App\Models\Settings::where(['group' => 'social'])->get();
@endphp
@section('head')
    @include('meta::manager', [
        'title' => 'Mail Send Successfully',
    ])
@endsection

@section('master')
    <!-- Breadcrumb -->
    @include('front.include.breadcrumb', [
        'page_title' => 'Mail Send Successfully',
        // 'data' => $product->ProductData,
        // 'expire_date' => $product->expire_date ?? null,
    ])
    <!-- End Breadcrumb -->
    {{-- contact us section start --}}
    <section class="bg-gray-100 py-20">
        <div class="container">
            <div class="lg:flex bg-white p-5 rounded-xl space-y-10 lg:space-y-0">
                <div class="w-full">
                    <div class=" mx-auto text-center">
                        <h4 class=" text-lg text-center font-semibold mb-5">Your Mail Send Successfully!</h4>
                        <a href="/"
                            class="shadow primary-bg hover:bg-blue-900 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                            type="submit">
                            Back Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- contact us section end --}}
@endsection
