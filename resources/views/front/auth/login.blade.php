<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ $settings_g['favicon'] ?? '' }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>@yield('title') - {{$settings_g['title'] ?? env('APP_NAME')}}</title> --}}

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/js/slick/slick.css') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
</head>

<body class="">
    <div class="app">
        <section class=" bg-gray-100 h-screen flex items-center">
            <div class="container">
                <div class="flex items-center p-4 lg:justify-center">
                    <div
                        class="flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md">
                        <div
                            class="p-4 py-6 text-white primary-bg md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly">
                            @if (isset($settings_g['logo']))
                                <div class="my-3 flex rounded-xl p-3 justify-center items-center bg-white">
                                    <a href="{{ route('homepage') }}"><img class=" w-48"
                                            src="{{ $settings_g['logo'] ?? '' }}" alt=""></a>
                                </div>
                            @else
                                <div class="my-3 text-4xl font-bold tracking-wider text-center">
                                    <a href="#">LESLIE-ANN FULLERTON <br>CONSULTING</a>
                                </div>
                            @endif
                            <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">

                            </p>
                            <p class="flex flex-col items-center justify-center mt-10 text-center">
                                <span>Don't have an account?</span>
                                <a href="{{ route('register') }}" class="underline">Get Started!</a>
                            </p>
                            <p class="mt-6 text-sm text-center text-gray-300">

                            </p>
                        </div>
                        <div class="p-5 bg-white md:flex-1">
                            <h3 class="my-4 text-2xl font-semibold text-gray-700">Login</h3>
                            <form method="POST" action="{{ route('login') }}" class="flex flex-col space-y-5">
                                @csrf
                                <div class="flex flex-col space-y-1">
                                    <label for="email" class="text-sm font-semibold text-gray-500">Email address</label>
                                    <input type="email" id="email" autofocus
                                        class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200 @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" />
                                    @error('email')
                                        <span class="invalid-feedback text-base text-red-500" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="flex flex-col space-y-1">
                                    <div class="flex items-center justify-between">
                                        <label for="password" class="text-sm font-semibold text-gray-500">Password</label>
                                        <a href="{{ route('password.request') }}"
                                            class="text-sm text-blue-900 hover:underline focus:text-blue-900">Forgot Password?</a>
                                    </div>
                                    <input type="password" id="password"
                                        class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200 @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" />

                                    @error('password')
                                        <span class="invalid-feedback text-base text-red-500" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input type="checkbox" id="remember"
                                        class="w-4 h-4 transition duration-300 rounded focus:ring-2 focus:ring-offset-0 focus:outline-none focus:ring-blue-200"
                                        name="remember" {{ old('remember') ? 'checked' : '' }} />
                                    <label for="remember" class="text-sm font-semibold text-gray-500">Remember me</label>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 primary-bg rounded-md shadow hover:bg-blue-900 focus:outline-none focus:ring-blue-200 focus:ring-4">
                                        Log in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

{{-- jquery file --}}
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script type="text/javascript" src="{{ asset('frontend/js/slick/slick.min.js') }}"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

<script>

</script>

</body>

</html>
