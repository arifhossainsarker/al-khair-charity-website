@extends('front.layouts.master')
@php
    $page_title=$blog->title;
    $news=\App\Models\Blog::where(['status'=>1])->latest()->take(5)->get();
@endphp
@section('head')
    @include('meta::manager', [
        'title' => $blog->title.'- ' . ($settings_g['slogan'] ?? '')
    ])
    <!-- Latest compiled and minified CSS -->
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        &lt;!&ndash; Optional theme &ndash;&gt;
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        &lt;!&ndash; Latest compiled and minified JavaScript &ndash;&gt;
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
            .comment-img {
                width: 3rem;
                height: 3rem;
            }
            .comment-replies .comment-img {
                width: 1.75rem;
                height: 1.75rem;
            }
        </style>-->
@endsection
@section('master')

    <!-- Breadcrumb -->
    <nav class="flex py-5 px-5 text-gray-700 bg-sky-400 border border-gray-200 dark:bg-gray-800 dark:border-gray-700"
         aria-label="Breadcrumb">
        <div class="container">

            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{route('homepage')}}"
                       class="inline-flex items-center text-sm font-medium text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <a href="#"
                           class="ml-1 text-sm font-medium text-white hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{$page_title}}</a>
                    </div>
                </li>
            </ol>
        </div>
    </nav>
    <!-- End Breadcrumb -->

    {{-- page section start --}}
    <section class="bg-gray-100 py-20">
        <div class="container">
            <div class="lg:flex space-y-10 lg:space-y-0">
                {{-- publication details --}}
                <div class="w-full lg:w-3/4 mx-auto ">
                    <div class="py-5">
                        <h2 class="text-2xl font-medium">{{ $blog->title }}</h2>
                    </div>

                    <div class="flex mb-10">
                        <span class="flex items-center">
                            <i class="fa fa-calendar mr-1"></i>
                        </span>
                        <span
                            class="text-xs font-normal ml-2">{{ \Carbon\Carbon::parse($blog->created_at)->format('j F, Y') }}</span>
                    </div>
                    @if($blog->feature_type)
                        <div class="blog-video mb-10 rounded-lg w-full object-contain m-auto">
                            {!! $blog->video_html_full !!}
                        </div>
                    @else
                        @if($blog->image)
                            <div class="mb-10">
                                <img src="{{$blog->img_paths['original']}}"
                                     class="rounded-lg w-full object-contain m-auto" alt="{{ $blog->title }}">
                            </div>
                        @endif
                    @endif

                    <div class="text-base font-normal mb-10">
                        {!! $blog->description !!}
                    </div>
                    @if($blog->video_type== "Embade Code" && $blog->video_embade_code)
                        <div class="mb-10">
                            {!! $blog->video_embade_code !!}
                        </div>
                    @elseif($blog->video_type== "File" && $blog->video)
                        <div class="mb-10">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="{{ $blog->video_path }}" type="video/mp4"/>
                            </video>
                        </div>
                    @elseif($blog->pdf_file)
                        <div class="mb-10">
                            <embed class="w-full h-screen" src="{{ $blog->pdf_file }}#toolbar=1"
                                   type="application/pdf"/>
                        </div>
                    @endif
                    <div class="w-full bg-white p-2 pt-4 rounded shadow-lg">
                        @if(auth()->check())
                            <form action="{{route('comment.store')}}" method="post">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}"/>
                                <div class="mt-3 p-3 w-full">
                                    <textarea rows="3" class="border p-2 rounded w-full" name="comment"
                                              placeholder="Write your comment here..."></textarea>
                                </div>
                                <div class="flex justify-center mb-3">
                                    <button type="submit"
                                            class="px-4 py-1 bg-gray-800 text-white float-left rounded font-light hover:bg-gray-700">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        @else
                            <div class="md:flex md:items-center justify-center mt-3 mb-3">
                                <div class="md:w-1/3">
                                    <a href="{{route('login')}}"
                                       class="shadow bg-sky-400 hover:bg-sky-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                       type="submit">
                                        Login to comment
                                    </a>
                                </div>
                            </div>
                        @endif
                        <hr>

                        <div>
                            <h1>Comment sections ( {{ $blog->comments()->where(['status'=>1])->count() }} )</h1>
                        </div>
                        @foreach($blog->comments()->where(['status'=>1])->latest()->get() as $comment)
                            <div class="flex ml-3 mt-4">
                                <div class="mr-3">
                                    <img
                                        src="{{$comment->user?$comment->user->profile_image?$comment->user->profile_path['original']: 'http://picsum.photos/50' : 'http://picsum.photos/50'}}"
                                        alt="" class="rounded-full">
                                </div>
                                <div>
                                    <h1 class="font-semibold">{{ $comment->user?$comment->user->full_name:'' }}</h1>
                                    <p class="text-xs text-gray-500"> {{ $comment->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <div class="flex ml-5 mt-3">
                                <p>{{ $comment->comment }}</p>
                            </div>
                            <hr>
                        @endforeach
                    </div>

                </div>
                {{-- publication sidebar --}}
                <div class="lg:w-1/4 w-full">
                    <div class="lg:ml-5 border border-gray-200 rounded-lg shadow-lg">
                        <div class="pt-2 pb-5">
                            {{-- section Heading --}}
                            <h2 class="font-medium text-xl mb-10 p-3 text-cyan-500">Recent Blogs</h2>
                            {{-- sidebar content --}}
                            @foreach($news as $key=>$new)
                                <a href="{{route('blog.single',$new->title) }}">
                                    <div class="flex m-2 border-b border-gray-200 pb-5 last:border-0">
                                        <div class="">
                                            <img class="h-14 w-20 object-cover"
                                                 src="{{ $new->feature_type?$new->video_thumbnail:$new->img_paths['small']  }}"
                                                 alt="">
                                        </div>
                                        <div class="w-2/3 ml-2">
                                            <span
                                                class="text-xs font-normal">{{ \Carbon\Carbon::parse($blog->created_at)->format('j F, Y') }}</span>
                                            <h2 class=" text-sm font-normal">{{ Str::limit($blog->title, 40) }}</h2>
                                            {{-- <a class=" text-sky-400 text-sm font-medium" href="{{route('news.single',$new->title) }}">Read More</a> --}}
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- page section end --}}
@endsection
