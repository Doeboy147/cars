<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/ajax/toastr/toastr.min.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md p-3 navbar-light bg-dark shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <strong class="text-white logoTxt">
                    {{ config('app.name', 'Laravel') }}
                </strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <img class="img-fluid rounded" src="{{ asset('images/audi-logo.png') }}" width="85">
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="navbar navbar-expand-md  fixed-bottom p-3 navbar-light shadow-sm">
        <div class="container-fluid">
            &copy; {{ date('Y') }}

            <div class="">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->

                Powered By <a target="_blank" href="https://loh-iot.online"> LoH</a>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/ajax/ajax-form.js') }}"></script>
<script src="{{ asset('js/ajax/bootbox.js') }}"></script>
<script src="{{ asset('js/ajax/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('js/ajax/main.js') }}"></script>
</body>
</html>
