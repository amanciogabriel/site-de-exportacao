<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    @yield('css')
</head>
<body>  
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand bg-white" href="#">AQUI SO TEM NEGAO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active bg-white" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active bg-white" aria-current="page" href="{{route('contato')}}">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link bg-white" href="{{ route('sobrenos')}}">Sobre-nos</a>
              </li>
              <li class="nav-item">
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle bg-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item bg-white" href="#">Action</a></li>
                  <li><a class="dropdown-item bg-white" href="#">Another action</a></li>
                  <li><a class="dropdown-item bg-white" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
                <!-- Navbar content -->
              </nav>
          </form>
        </div>
        
      </nav>
      
    <div class="container">
        @yield('body')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('js')
</body>
</html>