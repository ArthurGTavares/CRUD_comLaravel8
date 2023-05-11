<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="/css/style.css" rel="stylesheet">
    
    </head>
    <body class="antialiased">
        <h1>@yield('title')</h1>
        <img src="/image/festivais-de-musica.jpg" alt="Banner">
        @yield('Conteudo')
    </body>
    <footer>
        <p>AGT Events &copy; 2023</p>
    </footer>
</html>