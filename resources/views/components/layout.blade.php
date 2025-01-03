<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <a href="{{ route('home') }}"> futuro logo</a>
        <nav>
            <a href="{{ route('about') }}">about</a>
        </nav>
        <input type="text" name="" id="" placeholder="Buscar">
        <a href="">repository on GitHub</a>
        <div class="log">
            <a href="" class="login">Log in</a>
            <a href="" class="signUp">Sign up</a>            
        </div>
    </header>
    <div class="nav2">
        <a href=""></a>
    </div>
    <main>
        {{ $slot }}
    </main>
</body>
</html>

<style>
    body{
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }
    header{
        display: flex;
        align-items: center;
        align-content: center;
        gap: 10rem
    }
    header input{
        width: 25rem;
    }
</style>