<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/">
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
        <p>header 2</p>
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
    body{
        display: grid;
        grid-template-areas: 
            "header header header"
            "sidebar main main"
            "sidebar main main";
        grid-template-columns: 1fr 3fr 3fr;
    }
    header{
        grid-area: header;
        display: flex;
        align-items: center;
        align-content: center;
        justify-content: center;
        gap: 6rem;
        border: 2px solid black;
        padding: 1rem;
    }
    header a{
        text-decoration: none;
    }
    header input{
        width: 25rem;
    }
    header .log{
        display: flex;
        gap: 1rem;
    }
    header .log a{
        padding: 2px 0.5rem;
    }
    header .log .login{
        border: 2px solid blue;
        border-radius: 0.5rem;
    }
    header .log .signUp{
        border: 2px solid blue;
        border-radius: 0.5rem;
        background-color: blue;
        color: white;
    }
    .sidebar{
        grid-area: sidebar;
        border: 2px solid black;
        padding: 1rem;
    }
    main{
        grid-area: main;
        border: 2px solid black;
        padding: 1rem;
    }
</style>