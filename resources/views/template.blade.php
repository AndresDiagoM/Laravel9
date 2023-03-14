<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- CONTENEDOR DEL MENU SUPERIOR Y PÁGINA --}}
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="flex item-center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/chip.png') }}" alt="Logo" class="h-12">
                </a>

                <form action="{{ route('blog') }}" method="GET">
                    <input type="text" name="search" placeholder="Buscar...">
                </form>
            </div>

            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">LOGIN</a>
                <a href="{{ route('register') }}">REGISTRO</a>
            @endauth

        </header>

        @yield('content')
    </div>

</body>
</html>