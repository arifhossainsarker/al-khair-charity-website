@extends('front.layouts.master')
@php
    $socials = \App\Models\Settings::where(['group' => 'social'])->get();
@endphp
@section('head')
    @include('meta::manager', [
        'title' => 'Contact Us',
    ])
@endsection

@section('master')
    <!-- Breadcrumb -->
    @include('front.include.breadcrumb', [
        'page_title' => 'Contact Us',
        // 'data' => $product->ProductData,
        // 'expire_date' => $product->expire_date ?? null,
    ])
    <!-- End Breadcrumb -->
    {{-- contact us section start --}}
    <section class="bg-gray-100 py-20">
        <div class="container">
            <div class="lg:flex bg-white p-5 rounded-xl space-y-10 lg:space-y-0">
                <div class="w-full lg:w-1/2 lg:ml-10">
                    {{-- section title --}}
                    <div>
                        <h2 class="text-3xl font-bold primary-color mb-10">Department of Microbiology</h2>
                    </div>
                    <div class="mb-2">
                        <div class="flex space-x-5">
                            <span
                                class=" text-blue-900 text-xl border border-blue-900 rounded-full h-10 w-10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                            <span class="text-base font-normal italic">
                                <p>{{ $settings_g['street'] ?? '' }}</p>
                                <p>Noakhali Science and Technology University</p>
                                <p>{{ $settings_g['city'] ?? '' }}-{{ $settings_g['zip'] ?? '' }},
                                    {{ $settings_g['country'] ?? '' }}</p>
                            </span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="flex space-x-5">
                            <span
                                class=" text-blue-900 text-xl border border-blue-900 rounded-full h-10 w-10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                                </svg>
                            </span>
                            <span class="text-base font-normal">
                                <p>{{ $settings_g['mobile_number'] ?? '' }}</p>
                                <p>{{ $settings_g['tel'] ?? '' }}</p>
                            </span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="flex space-x-5">
                            <span
                                class=" text-blue-900 text-xl border border-blue-900 rounded-full h-10 w-10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </span>
                            <span class="text-base font-normal">
                                <p>{{ $settings_g['email'] ?? '' }}</p>
                            </span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="flex space-x-5">
                            <span
                                class=" text-blue-900 text-xl border border-blue-900 rounded-full h-10 w-10 flex items-center justify-center">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAC60lEQVRIieWWT2gUVxzHP9+8t6z0YLIe4iExB8EeQiChICIEiihooFUprEmTBjwpHnoVBI8e0mvpKYIIdTUll0KVqBBjD4IeaoRGS3IopX8O7cE/VTA6f34eZsbsziap2UlP/i478+b73oc3b99nHrxvpc0baqhcouOEycaAvrRxQaZawNNJmHn1P4DHur2iq0D/6s/tQWjxJzD9V9bSVhxa7XGKfkygWjTjs9Bce2h0mdkxYAk04NV2FYbKWa+CMx7Z4cRtwU7gXmhbDsHFp42Z0YpXfBf4UGZfBnz3DRSa8VDZix9WoNHBZijA5SdmdhbApC+y1pbBJdpPAv0GvyUznX62VjZCd5Ir9RYGmxhLLuz06jNdv3yrYKAXIKJ8K7kd7/QKZkAvQrvycX3QoUEwwB5mbUX+1cvJz8u2FDoLfAS2pTF2vEOycwAyq20G+BcAT9t4Cu0DFkIrfboSqbZ7LV8HdgHzAf+ez564VqmOPkMcRToIdKbQ/fDtP0litOKl68Aeg18j4xB8/zjr3/IaB3DTQwCUGqGfb3fEB6R4AuhOoNE+mP6jvv864Cb3LgOPZFwI4KYXN/JQx8iwZJdA2bjzkbnDMPVnfvQ1zPVf7m2eaYnh3SZdAz4AfpZZLSCehOnXqw2wCrja4+TmEiNp0czORLhZeO1L+DGTfZ0Gc2u6scq96pEdTsytaLBc597xTlNwYjOg0LCd1nPv232abZm3r7cwOHMvaDHvXq/gWh7qGBlO17QYOHNv8iVpcm8I/FS/ZSQugXKWeveqX+PUvf5OPhTa1N76e0d8INkyK+7daLWgzNGKpAlodG8R8EMARzC4drza7hXPAN3k3NsyWKYagKRzMFppjh7v8HI3SN0bGkfyJ8eNVJ1AhspeW++CBoAlMzubnRwcGkw/bbvq3Pt7q9AcGKDalZwGNbBGfj40dxhqTe7daOU+i4+ex/RcdJT/RtoGVEi8fF9mX4XEp2DqSVHo+1lvAIrlOBO88lFlAAAAAElFTkSuQmCC">
                            </span>
                            <span class="text-base font-normal">
                                <p>www.micro.nstu.edu.bd</p>
                            </span>
                        </div>
                    </div>
                    <div class="mt-10">
                        <ul class="flex space-x-5">
                            @if (Info::Social($socials, 'facebook'))
                                <li class="h-10 w-10 flex items-center justify-center">
                                    <a href="{{ Info::Social($socials, 'facebook') }}" target="_blank"
                                        class="btn-social btn-facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px"
                                            height="48px">
                                            <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z" />
                                            <path fill="#fff"
                                                d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z" />
                                        </svg>
                                    </a>
                                </li>
                            @endif
                            @if (Info::Social($socials, 'twitter'))
                                <li class="h-10 w-10 flex items-center justify-center">
                                    <a target="_blank" href="{{ Info::Social($socials, 'twitter') }}"
                                        class="btn-social btn-twitter">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px"
                                            height="48px">
                                            <linearGradient id="_osn9zIN2f6RhTsY8WhY4a" x1="10.341" x2="40.798"
                                                y1="8.312" y2="38.769" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#2aa4f4" />
                                                <stop offset="1" stop-color="#007ad9" />
                                            </linearGradient>
                                            <path fill="url(#_osn9zIN2f6RhTsY8WhY4a)"
                                                d="M46.105,11.02c-1.551,0.687-3.219,1.145-4.979,1.362c1.789-1.062,3.166-2.756,3.812-4.758	c-1.674,0.981-3.529,1.702-5.502,2.082C37.86,8.036,35.612,7,33.122,7c-4.783,0-8.661,3.843-8.661,8.582	c0,0.671,0.079,1.324,0.226,1.958c-7.196-0.361-13.579-3.782-17.849-8.974c-0.75,1.269-1.172,2.754-1.172,4.322	c0,2.979,1.525,5.602,3.851,7.147c-1.42-0.043-2.756-0.438-3.926-1.072c0,0.026,0,0.064,0,0.101c0,4.163,2.986,7.63,6.944,8.419	c-0.723,0.198-1.488,0.308-2.276,0.308c-0.559,0-1.104-0.063-1.632-0.158c1.102,3.402,4.299,5.889,8.087,5.963	c-2.964,2.298-6.697,3.674-10.756,3.674c-0.701,0-1.387-0.04-2.065-0.122C7.73,39.577,12.283,41,17.171,41	c15.927,0,24.641-13.079,24.641-24.426c0-0.372-0.012-0.742-0.029-1.108C43.483,14.265,44.948,12.751,46.105,11.02" />
                                        </svg>
                                    </a>
                                </li>
                            @endif
                            @if (Info::Social($socials, 'youtube'))
                                <li class="h-10 w-10 flex items-center justify-center">
                                    <a target="_blank" href="{{ Info::Social($socials, 'youtube') }}"
                                        class="btn-social btn-youtube">

                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48"
                                            height="48" viewBox="0 0 48 48" style=" fill:#000000;">
                                            <path fill="#FF3D00"
                                                d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z">
                                            </path>
                                            <path fill="#FFF" d="M20 31L20 17 32 24z"></path>
                                        </svg>
                                    </a>
                                </li>
                            @endif
                            @if (Info::Social($socials, 'instagram'))
                                <li class="h-10 w-10 flex items-center justify-center">
                                    <a target="_blank" href="{{ Info::Social($socials, 'instagram') }}"
                                        class="btn-social btn-instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="48" height="48" viewBox="0 0 48 48" style=" fill:#000000;">
                                            <radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035"
                                                r="44.899" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#fd5"></stop>
                                                <stop offset=".328" stop-color="#ff543f"></stop>
                                                <stop offset=".348" stop-color="#fc5245"></stop>
                                                <stop offset=".504" stop-color="#e64771"></stop>
                                                <stop offset=".643" stop-color="#d53e91"></stop>
                                                <stop offset=".761" stop-color="#cc39a4"></stop>
                                                <stop offset=".841" stop-color="#c837ab"></stop>
                                            </radialGradient>
                                            <path fill="url(#undefined)"
                                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                            </path>
                                            <radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54"
                                                r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#4168c9"></stop>
                                                <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                            </radialGradient>
                                            <path fill="url(#undefined)"
                                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                            </path>
                                            <path fill="#fff"
                                                d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                            </path>
                                            <circle cx="31.5" cy="16.5" r="1.5" fill="#fff">
                                            </circle>
                                            <path fill="#fff"
                                                d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            @endif
                            @if (Info::Social($socials, 'linkedin'))
                                <li class="h-10 w-10 flex items-center justify-center"><a target="_blank"
                                        href="{{ Info::Social($socials, 'linkedin') }}" class="btn-social btn-linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="48" height="48" viewBox="0 0 48 48" style=" fill:#000000;">
                                            <path fill="#0288d1"
                                                d="M24,4C13,4,4,13,4,24s9,20,20,20s20-9,20-20S35,4,24,4z"></path>
                                            <rect width="4" height="15" x="14" y="19"
                                                fill="#fff"></rect>
                                            <path fill="#fff"
                                                d="M16,17L16,17c-1.2,0-2-0.9-2-2c0-1.1,0.8-2,2-2c1.2,0,2,0.9,2,2C18,16.1,17.2,17,16,17z">
                                            </path>
                                            <path fill="#fff"
                                                d="M35,24.5c0-3-2.5-5.5-5.5-5.5c-1.9,0-3.5,0.9-4.5,2.3V19h-4v15h4v-8c0-1.7,1.3-3,3-3s3,1.3,3,3v8h4	C35,34,35,24.9,35,24.5z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    {{-- section title --}}
                    <div class="">
                        <h2 class=" text-3xl font-bold primary-color mb-10">GET IN TOUCH</h2>
                    </div>
                    <form action="{{ route('contact.us.store') }}" method="POST" class="w-full max-w-lg">
                        @csrf
                        @method('POST')
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Full Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-first-name" name="name" type="text" placeholder="Full Name" required>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Email Address
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-last-name" name="email" type="email" placeholder="example@email.com"
                                    required>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="phone">
                                    Phone
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="phone" id="phone" type="text" required>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Subject
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="subject" id="email" type="text" required>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Message
                                </label>
                                <textarea
                                    class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                                    id="message" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3">
                                <button
                                    class="shadow primary-bg hover:bg-blue-900 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                    type="submit">
                                    Send Email
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- contact us section end --}}

    {{-- Map section --}}
    <section class="bg-gray-100 py-5">
        <div class="container">
            <div class="lg:flex bg-white p-5 rounded-xl space-y-5 lg:space-y-0">
                <div class="w-full">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=NSTU&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                href="https://123movies-a.com"></a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 100%;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 100%;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Map section end --}}
@endsection
