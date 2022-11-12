<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <title>{{config('app.name')}}</title>
 
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- <link rel="stylesheet" href="/css/style.css"> --}}
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html {
                line-height: 1.15;
                -webkit-text-size-adjust: 100%
            }

            body {
                margin: 0
            }

            a {
                background-color: transparent
            }

            [hidden] {
                display: none
            }

            html {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                line-height: 1.5
            }

            *,
            :after,
            :before {
                box-sizing: border-box;
                border: 0 solid #e2e8f0
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            svg,
            video {
                display: block;
                vertical-align: middle
            }

            video {
                max-width: 100%;
                height: auto
            }

            .bg-white {
                --bg-opacity: 1;
                background-color: #fff;
                background-color: rgba(255, 255, 255, var(--bg-opacity))
            }

            .bg-gray-100 {
                --bg-opacity: 1;
                background-color: #f7fafc;
                background-color: rgba(247, 250, 252, var(--bg-opacity))
            }

            .border-gray-200 {
                --border-opacity: 1;
                border-color: #edf2f7;
                border-color: rgba(237, 242, 247, var(--border-opacity))
            }

            .border-t {
                border-top-width: 1px
            }

            .flex {
                display: flex
            }

            .grid {
                display: grid
            }

            .hidden {
                display: none
            }

            .items-center {
                align-items: center
            }

            .justify-center {
                justify-content: center
            }

            .font-semibold {
                font-weight: 600
            }

            .h-5 {
                height: 1.25rem
            }

            .h-8 {
                height: 2rem
            }

            .h-16 {
                height: 4rem
            }

            .text-sm {
                font-size: .875rem
            }

            .text-lg {
                font-size: 1.125rem
            }

            .leading-7 {
                line-height: 1.75rem
            }

            .mx-auto {
                margin-left: auto;
                margin-right: auto
            }

            .ml-1 {
                margin-left: .25rem
            }

            .mt-2 {
                margin-top: .5rem
            }

            .mr-2 {
                margin-right: .5rem
            }

            .ml-2 {
                margin-left: .5rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .ml-4 {
                margin-left: 1rem
            }

            .mt-8 {
                margin-top: 2rem
            }

            .ml-12 {
                margin-left: 3rem
            }

            .-mt-px {
                margin-top: -1px
            }

            .max-w-6xl {
                max-width: 72rem
            }

            .min-h-screen {
                min-height: 100vh
            }

            .overflow-hidden {
                overflow: hidden
            }

            .p-6 {
                padding: 1.5rem
            }

            .py-4 {
                padding-top: 1rem;
                padding-bottom: 1rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .pt-8 {
                padding-top: 2rem
            }

            .fixed {
                position: fixed
            }

            .relative {
                position: relative
            }

            .top-0 {
                top: 0
            }

            .right-0 {
                right: 0
            }

            .shadow {
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
            }

            .text-center {
                text-align: center
            }

            .text-gray-200 {
                --text-opacity: 1;
                color: #edf2f7;
                color: rgba(237, 242, 247, var(--text-opacity))
            }

            .text-gray-300 {
                --text-opacity: 1;
                color: #e2e8f0;
                color: rgba(226, 232, 240, var(--text-opacity))
            }

            .text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .text-gray-500 {
                --text-opacity: 1;
                color: #a0aec0;
                color: rgba(160, 174, 192, var(--text-opacity))
            }

            .text-gray-600 {
                --text-opacity: 1;
                color: #718096;
                color: rgba(113, 128, 150, var(--text-opacity))
            }

            .text-gray-700 {
                --text-opacity: 1;
                color: #4a5568;
                color: rgba(74, 85, 104, var(--text-opacity))
            }

            .text-gray-900 {
                --text-opacity: 1;
                color: #1a202c;
                color: rgba(26, 32, 44, var(--text-opacity))
            }

            .underline {
                text-decoration: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .w-5 {
                width: 1.25rem
            }

            .w-8 {
                width: 2rem
            }

            .w-auto {
                width: auto
            }

            .grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr))
            }

            @media (min-width:640px) {
                .sm\:rounded-lg {
                    border-radius: .5rem
                }

                .sm\:block {
                    display: block
                }

                .sm\:items-center {
                    align-items: center
                }

                .sm\:justify-start {
                    justify-content: flex-start
                }

                .sm\:justify-between {
                    justify-content: space-between
                }

                .sm\:h-20 {
                    height: 5rem
                }

                .sm\:ml-0 {
                    margin-left: 0
                }

                .sm\:px-6 {
                    padding-left: 1.5rem;
                    padding-right: 1.5rem
                }

                .sm\:pt-0 {
                    padding-top: 0
                }

                .sm\:text-left {
                    text-align: left
                }

                .sm\:text-right {
                    text-align: right
                }
            }

            @media (min-width:768px) {
                .md\:border-t-0 {
                    border-top-width: 0
                }

                .md\:border-l {
                    border-left-width: 1px
                }

                .md\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }
            }

            @media (min-width:1024px) {
                .lg\:px-8 {
                    padding-left: 2rem;
                    padding-right: 2rem
                }
            }

            @media (prefers-color-scheme:dark) {
                .dark\:bg-gray-800 {
                    --bg-opacity: 1;
                    background-color: #2d3748;
                    background-color: rgba(45, 55, 72, var(--bg-opacity))
                }

                .dark\:bg-gray-900 {
                    --bg-opacity: 1;
                    background-color: #1a202c;
                    background-color: rgba(26, 32, 44, var(--bg-opacity))
                }

                .dark\:border-gray-700 {
                    --border-opacity: 1;
                    border-color: #4a5568;
                    border-color: rgba(74, 85, 104, var(--border-opacity))
                }

                .dark\:text-white {
                    --text-opacity: 1;
                    color: #fff;
                    color: rgba(255, 255, 255, var(--text-opacity))
                }

                .dark\:text-gray-400 {
                    --text-opacity: 1;
                    color: #cbd5e0;
                    color: rgba(203, 213, 224, var(--text-opacity))
                }

                .dark\:text-gray-500 {
                    --tw-text-opacity: 1;
                    color: #6b7280;
                    color: rgba(107, 114, 128, var(--tw-text-opacity))
                }
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block  ">
            @auth
                <a href="{{ url('/dashboard') }}" class=btn btn-outline-primary">Dashboard</a>
            @else
                {{-- <a href="{{ route('login') }}" class="btn btn-outline-primary" >Log in</a> --}}

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <body>
        {{-- <div class="banner1">
            <img src="img/hotel/hotel1.jpg" alt="">
            <div class="text_box text_box1">
                <h1>Welcome To Hotelio</h1>
                <span></span>
                <p>Where customer satisfaction is a philosophy</p>
            </div>
        </div>
        <div class="banner3">
            <img src="img/hotel/room.jpg" alt="">
            <div class="text_box text_box3">
                <h1>Welcome To Hotelio</h1>
                <span></span>
                <p>Where customer satisfaction is a philosophy</p>

            </div>
        </div>
        <div class="banner4">
            <img src="img/hotel/washroom.jpg" alt="">
            <div class="text_box text_box4">
                <h1>Welcome To Hotelio</h1>
                <span></span>
                <p>Where customer satisfaction is a philosophy</p>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-md-4">
                <div class="left">
                    <div class="col-md-9 text-center">
                        <div class="container">
                            <div class="d-flex flex-column  pt-5">
                                <div class="left-headig">
                                    <h1>Hotelio</h1>
                                </div>
                                <div>
                                    <h4>Welcome Back!</h4>
                                </div>
                                <div>
                                    <p class="">
                                        The great advantage of a hotel is that it is a refuge from home life.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="left-img">
                            <img src="{{asset('img/bg-01.png')}}"
                            alt="logo"  class="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 m-auto">
                <div class="right">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 m-auto">
                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="text-center py-3">
                                        <h3>Sign in your account</h3>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="type your email">
                                        @error('email')
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="type your password">
                                        @error('password')
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                        Remember my preference</label>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary w-100 mt-2">Sign In</button>
                                        

                                    </div>
                            
                                    <div>
                                        <a href="{{ route('password.request') }}">I forgot my password</a>
                                    </div>
                                    <div class="py-2">
                                        <p>Don't have an account?<a href="{{ route('register')}}"" class="">Sign UP</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{-- </div> --}}

        <script src="/1sday/js/bootstrap.esm.min.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
