<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cipoense-FM 87.9</title>
    <link rel="icon" href="{{ URL::to('/') }}/images/site/CipoenseLogo.jpg">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mycss.css') }}" rel="stylesheet">

</head>
<body>
<header>
    <div class="container" id="nav-container">
        <nav class="navbar navbar-dark  navbar-expand-lg fixed-top">
            <div class="container">
                <a href="" class="navbar-brand">
                    <img id="logo" src="" alt=""> Cipoense FM
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                        aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="">Home</a>
                        <a class="nav-item nav-link" href="">Programação</a>
                        <a class="nav-item nav-link" href="">Locutores</a>
                        <a class="nav-item nav-link" href="">Sobre</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<main class="py-4">
    @yield('content')
</main>

<footer>

</footer>
</body>
</html>
