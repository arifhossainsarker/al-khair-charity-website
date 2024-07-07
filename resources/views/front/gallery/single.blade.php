@extends('front.layouts.master')

@section('head')

@endsection
@section('master')
     <!-- Breadcrumb -->
     @include('front.include.breadcrumb', [
    'page_title' => $document->title,
    // 'data' => $product->ProductData,
    // 'expire_date' => $product->expire_date ?? null,
    ])
    <!-- End Breadcrumb -->
    <section class="bg-gray-100 py-20">
        <div class="container">
            <div class="h-full w-full">
                <div class="">
                    <h2 class="py-10 text-center text-xl text-sky-400 font-bold uppercase">{{$document->title}}</h2>
                </div>
                <div class="">
                    <embed class="h-screen w-full" src="{{$document->pdf_file}}#toolbar=1" type="application/pdf" />
                </div>
            </div>
        </div>
    </section>

@endsection
@section('footer')

@endsection
