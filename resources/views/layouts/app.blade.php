<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Resource Manager</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .nav-link {
            font-size: 1.0rem;
            color: black;
        }

        .nav-item a:active {
            color: greenyellow;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <!-- <div class="container"> -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Resource Manager
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home/">PDF <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/htmlsnippets">HTML snippet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/links">Links</a>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item my-lg-0">
                        <a class="nav-link" href="/login">Login as Admin</a>
                    </li>
                </ul>

            </div>
            <!-- </div> -->
        </nav>

        <main class="py-3">
            @yield('content')
        </main>
    </div>
</body>

</html>