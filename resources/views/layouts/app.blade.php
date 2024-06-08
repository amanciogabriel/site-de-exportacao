<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    @yield('css')

    <link rel="stylesheet" href="{{asset('css/appblade.css')}}">

@section('body')
</head>
<body>

<nav class="navbar fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}">CARICACTUS<img class="logo" width="65px" src="{{asset('img/elemento-1.png')}}"></a>

        <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Quadros" aria-label="Search">
            <button class="btn btn-outline-success bg-transparent" type="submit">Pesquisar</button>
        </form>
        <div class="d-flex justify-content-end align-items-center">
            <img width="35px" src="{{ asset('img/carrinho.png') }}" class="me-4">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="page">filtros</a>
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
{{-- body --}}
<div class="container-fluid mt-4">
    @yield('body')
</div>
<footer class="text-center text-lg-start fixed-bottom" style="background-color: #000000;">
    <div class="container-fluid d-flex justify-content-center">
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #ffffff;">
        <i class="fab fa-facebook-f"></i>
      </button>
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #ffffff;">
        <i class="fab fa-youtube"></i>
      </button>
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
        <i class="fab fa-instagram"></i>
      </button>
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #ffffff;">
        <i class="fab fa-twitter"></i>
      </button>
    </div>

    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(255, 255, 255, 0.2);">
      © 2020 Copyright:
    </div>
    <!-- Copyright -->
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@yield('js')
</body>
</html>
