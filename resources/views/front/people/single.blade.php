@extends('front.layouts.master')

@section('head')
    @include('meta::manager', [
        'title' => 'single-people - ' . ($settings_g['slogan'] ?? ''),
    ])
    <style>
        .table-value li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            height: 80px;
            font-size: 12px;
        }
    </style>
@endsection

@section('master')
    <section class="">
        <div class="container bg-white">
            <!-- single pople area -->
            <div class="lg:flex space-y-10 lg:space-y-0 px-4 py-5">
                <!-- people sidebar start -->
                <div class="lg:w-1/4 w-full">
                    <div class=" shadow-lg pb-20">
                        <img class="h-80 w-auto" src="{{ $people->img_paths['medium'] }}" alt="">
                        <div class="pl-5 pr-2 text-gray-700">
                            <h4 class="mt-2 mb-4 text-2xl font-bold">Contact Me</h4>
                            <p class=" text-sm">Department Of {{ $people->department }}</p>
                            <p class=" text-sm">Noakhali Science and Technology University</p>
                            <p class=" text-sm">Email: {{ $people->email }}</p>
                        </div>
                    </div>
                </div>
                <!-- people sidebar end -->

                <!-- people details start -->
                <div class="lg:w-3/4 w-full lg:ml-10 lg:mr-5">
                    <!-- heading card start -->
                    <div class=" nav-bg text-white p-5">
                        <h2 class=" font-bold text-2xl">{{ $people->name }}</h2>
                        <p class=" text-base">{{ $people->name }}</p>
                        <p class=" text-base">Department of {{ $people->department }}</p>
                        <p class=" text-base">Noakhali Science and Technology University</p>
                        <p class=" text-base">Email: {{ $people->email }}</p>
                    </div>
                    <!-- heading card end -->

                    <!-- Persion description start -->
                    <div class="education-tab p-5">
                        <div class=" text-base text-gray-700 mb-5">
                            {!! $people->bio !!}
                        </div>
                        {{-- @php

                            $id = $people->PeopleQualifications->first();
                            $tab_id = $id->id;
                        @endphp --}}
                        <div class="" x-data="{ selected: 'option-1' }">
                            <ul class="flex justify-center space-x-6 text-white">
                                @foreach ($people_qualifications as $qualification)
                                    <li>
                                        <button x-on:click="selected = 'option-{{ $qualification->id }}'"
                                            class="inline-block p-2 btn-bg rounded hover:bg-blue-900">
                                            {{ $qualification->title }}
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="mt-6 bg-white">
                                @foreach ($people_qualifications as $_category)
                                    {{-- single tab start --}}
                                    <div class="relative" x-show="selected === 'option-{{ $_category->id }}'">
                                        <div class="flex flex-col">
                                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                                    <div class="overflow-hidden">
                                                        <table class="min-w-full">
                                                            <thead class="border-b">
                                                                <tr>
                                                                    @foreach ($_category->PeopleQualificationCategories as $key => $category)
                                                                        <th scope="col"
                                                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                                            {{ $category->title }}
                                                                        </th>
                                                                    @endforeach
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    @foreach ($_category->PeopleQualificationCategories as $key => $category)
                                                                        <td>
                                                                            <ul class="table-value">
                                                                                @foreach ($category->PeopleQualificationValues as $key => $value)
                                                                                    <li>{{ $value->value }}</li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </td>
                                                                    @endforeach
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- single tab end --}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Persion description end -->
                </div>
                <!-- people details end -->
            </div>
        </div>
    </section>
@endsection


@section('footer')
@endsection
