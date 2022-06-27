<!doctype html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/input_checkbox.css') }}" rel="stylesheet">
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="{{ asset('js/init-alpine.js')}}"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <!--<script id="xvas-22-domain-name" xvas-22-data-name="1215341654783951-1" type="text/javascript" src="http://xeroseo/js_controller/client"></script>-->
    <script src="{{ asset('js/charts-lines.js')}}" defer></script>
    <script src="{{ asset('js/charts-pie.js')}}" defer></script>
</head>

    @guest
        @yield('content')
    @else
        <body>
            <div class="flex h-screen bg-[#F8F7FD] dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

              @if(Route::is('dashboard.*') || Route::is('user.*') || Route::is('service.*') || Route::is('poste.*') || Route::is('inbox.*') || Route::is('work.*') || Route::is('api.*') || Route::is('analyse.*'))
                @include('layouts/menu-left')
              @endif
                <div class="flex flex-col flex-1 w-full">
                    @include('layouts/nav-top')
                    @yield('content')
                </div>
            </div>
        </body>

        @yield('script')
        @endguest

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>
