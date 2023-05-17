<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fonte google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!-- CSS pessoal -->
         <link href="/css/style.css" rel="stylesheet">
    </head>
    <body >
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">
                    <img src="/image/35.png" width="60" height="45" class="ms-4">
                </a>
                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav">
                        <li class="nav-item ms-2">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a href="/eventos/criar" class="nav-link">Criar Eventos</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>  
                </div>
            </nav>
        </header>
        @yield('conteudo')
        <footer>
            <p>AGT Events &copy; 2023</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>