@extends('front.layouts.master')
@php
    $page_title="Blogs";
    $news=\App\Models\Blog::where(['status'=>1])->orderBy('id','DESC')->get();
@endphp
@section('head')
    @include('meta::manager', [
        'title' => 'Blogs - ' . ($settings_g['slogan'] ?? '')
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
            {{-- publication content area --}}
            <div class="block space-y-10 lg:space-y-0 lg:flex lg:space-x-10 mt-10">
                {{-- single publication --}}
                @foreach($news as $key=>$new)
                <div class="w-full lg:w-1/4 shadow-lg shadow-black hover:shadow-sm duration-500">

                    <div class="flex justify-center items-center">
                        <a href="{{ $new->button_url??route('blog.single',$new->title) }}">
                        <div class="flex flex-col justify-between w-full sm:w-96 h-96 bg-white bg-center text-gray-800 shadow-md overflow-hidden cursor-pointer" style="background-image:url('{{ $new->feature_type?$new->video_thumbnail:$new->img_paths['small']  }}')">
                        <div class="flex justify-between items-center ml-4">
                            <div class="bg-red-600 text-white bg-opacity-95 shadow px-2 py-1 flex items-center font-bold text-xs rounded">{{ $new->Category->title }} </div>
                            <div class="bg-red-600 shadow flex p-2 text-center font-bold text-white rounded">{{date('d M, Y', strtotime($new->created_at))}}</div>
                        </div>
                        <div class="bg-white bg-opacity-95 shadow-md rounded-r-xl p-4 flex flex-col mr-4 mb-8">
                           <h3 class=" text-sm font-bold pb-2">{!! \Illuminate\Support\Str::limit($new->title,60) !!}</h3>
                        </div>
                        </div>
                        </a>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
