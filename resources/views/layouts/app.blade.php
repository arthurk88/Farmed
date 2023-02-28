<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <header>

        <div class="container-fluid px-0">
            <nav class="d-flex justify-content-around">
                <a class="mt-2" href="{{url('index')}}"><img class="mt-2" src="{{asset('image/logo.png') }}" height="30px" /></a>
                <ul>
                    <li><a href="{{url('index')}}">Inicio</a></li>
                    <li><a href="{{url('about')}}">Sobre Nós</a></li>
                    <li><a href="#">Ranking</a></li>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="box">

    </div>

    <audio id="song" src="public/song/index.mp3" autoplay loop>
        <script>
            var audio = document.getElementById("song");
            audio.volume = 0.2;
        </script>
    </audio>

    <main >
        @yield('content')
    </main>

 <!-- Scripts -->
 @vite(['resources/js/background.js'])
</body>


</html>