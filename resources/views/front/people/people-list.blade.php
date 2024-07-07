@extends('front.layouts.master')

@section('head')
    @include('meta::manager', [
        'title' => 'People - ' . ($settings_g['slogan'] ?? ''),
    ])
    @php
        $people_categories = \App\Models\People::where('status', 1)
            ->OrderBy('position', 'ASC')
            ->get();
        $events = \App\Models\News::where(['status' => 1])
            ->OrderBy('position', 'ASC')
            ->take(5)
            ->get();
        $notices = \App\Models\NoticeBoard::where(['status' => 1])
            ->OrderBy('created_at', 'DESC')
            ->take(5)
            ->get();

    @endphp
@endsection

@section('master')
    <section class="">
        <div class="container bg-white">
            <!-- people area -->
            <div class="px-4 py-5">

                <!-- details start -->
                <div class="lg:ml-10 lg:mr-5">
                    <!-- People details area start -->
                    <div class="mt-5 mb-10">

                        @foreach ($peoples as $people)
                            <!-- single people card start -->
                            <div class="lg:flex lg:space-y-0 space-y-5 p-2 shadow mb-10">
                                <div class="lg:w-1/3 w-full">
                                    <a href="{{ route('single-people', $people->slug) }}">
                                        <img class="h-40 w-auto" src="{{ $people->img_paths['medium'] }}" alt="">
                                    </a>
                                </div>
                                <div class="lg:w-1/3 w-full">
                                    <a href="{{ route('single-people', $people->slug) }}">
                                        <h2 class=" text-xl font-bold text-gray-800">{{ $people->name }}</h2>
                                    </a>
                                    <p class="text-base text-gray-600 font-semibold">{{ $people->designation }}</p>
                                    <p class="text-base text-gray-600 font-semibold">Email: {{ $people->email }}</p>
                                    <br>
                                    @if ($people->phone != null)
                                        <p class="text-base text-gray-600 font-semibold">Mobile: {{ $people->phone }}</p>
                                    @endif

                                </div>
                                <div class="lg:w-1/3 w-full">
                                    @if ($people->research_interest != null)
                                        <h2 class=" text-gray-800 font-bold text-lg">Research Interest</h2>
                                        <p class=" text-gray-800 font-bold text-sm">{{ $people->research_interest }}</p>
                                    @endif

                                </div>
                            </div>
                            <!-- single people card end -->
                        @endforeach
                        <div class="people-pagination">
                            {{ $peoples->links() }}
                        </div>

                    </div>
                    <!-- People details area end -->
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection
