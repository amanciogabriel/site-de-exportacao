<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    @yield('css')

    <link rel="stylesheet" href="{{asset('css/appblade.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}"><img class="logo" width="100px" src="{{asset('img/logocerta.png')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENU</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Produtos<img class="logo" width="12px" src="{{asset('img/casa.png')}}"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home<img class="logo" width="12px" src="{{asset('img/casa.png')}}"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('sobrenos') }}">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('contato.submit') }}">Contato<img class="logo" width="12px" src="{{asset('img/comentario.png')}}"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="page">Filtros</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cor</a></li>
                            <li><a class="dropdown-item" href="#">Tamanho</a></li>
                            <li><a class="dropdown-item" href="#">Preço</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid mt-5 pt-4">
    @yield('body')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@yield('js')
</body>
</html>
