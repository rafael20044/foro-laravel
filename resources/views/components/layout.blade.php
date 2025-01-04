<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <a href="{{ route('home') }}"> futuro logo</a>
        <nav>
            <a href="{{ route('about') }}">about</a>
        </nav>
        <input type="text" name="" id="" placeholder="Buscar">
        <a href="https://github.com/rafael20044/foro-laravel" target="_black">repository on GitHub</a>
        <div class="log">
            <a href="" class="login">Log in</a>
            <a href="" class="signUp">Sign up</a>            
        </div>
    </header>
    <div class="sidebar">
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="">Profile</a>
            <a href="">Questions</a>
            <a href="">Users</a>
        </nav>
    </div>
    <main>
        {{ $slot }}
    </main>
</body>
</html>