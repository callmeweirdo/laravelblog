<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href=" {{ asset("assets/css/styles.css") }} " rel="stylesheet" />
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('styles/css/app.css') }}" rel="stylesheet">
</head>
<body>

@include('layouts.includes.admin-navbar')


<div id="layoutSidenav">
    @include('layouts.includes.admin-sidebar')
    <div id="layoutSidenav_content">
    <main>
        @yield('contents')
    </main>
    @include('layouts.includes.admin-footer')
</div>

</div>





<script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </body>
</html>
