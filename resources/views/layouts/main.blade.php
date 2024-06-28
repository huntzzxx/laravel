<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- JavaScript da Aplicação -->
        <script src="js/script.js"></script>

        <!-- CSS da Aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" alt="Logo da Empresa">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link"> Eventos <ion-icon name="dice-outline"></ion-icon></a>
                        </li>
                        <li class="nav-item">
                             <a href="/events/create" class="nav-link"> Criar Eventos </a>
                        </li>
                        <li class="nav-item">
                             <a href="/" class="nav-link"> Entrar </a>
                        </li>
                        <li class="nav-item">
                             <a href="/" class="nav-link"> Registrar </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <h1> @yield('title') </h1>
        @yield('content')
        <footer>
            <p> 2024&copy; Todos os direitos reservados </p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>