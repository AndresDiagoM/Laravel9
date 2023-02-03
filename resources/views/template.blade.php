<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web</title>
</head>
<body>
    <p>
        <a href="{{ route('home') }}">HOME</a>
        <a href="{{ route('blog') }}">BLOG</a>

        @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
        @else
            <a href="{{ route('login') }}">LOGIN</a>
            <a href="{{ route('register') }}">REGISTRO</a>
        @endauth
    </p>

    <hr>

    @yield('content')

</body>
</html>