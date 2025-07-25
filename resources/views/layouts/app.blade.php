<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/ebca36437e.js" crossorigin="anonymous"></script>

   

    <!-- Custom Styles for Navbar -->
    <style>
        .navbar {
            background-color: #1a2a4b !important; /* Dark blue background for navbar */
            font-size: 1.1rem; /* Bigger font for navbar links */
        }
        .navbar-brand,
        .navbar-nav .nav-link {
            color: #f8f9fa !important; /* Light text color for contrast */
        }
        .navbar-toggler-icon {
            filter: invert(1); /* Make toggler icon visible on dark background */
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    @yield('logo')
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                       <li class='nav-item'>
                            <a class='nav-link' href="#header-section">Home</a>
                       </li>
                       <li class='nav-item'>
                            <a class='nav-link' href="#skills-section">Skills</a>
                       </li>
                       <li class='nav-item'>
                            <a class='nav-link' href="#projects-section">Projects</a>
                       </li>
                       
                       <li class='nav-item'>
                            <a class='nav-link' href="#contact-section">Contact</a>
                       </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer mt-auto py-3 bg-dark text-white text-center">
            <div class="container">
                <span class="text-white">Created by Hussein Helal | @2025</span>
            </div>
        </footer>
    </div>
</body>
</html>
