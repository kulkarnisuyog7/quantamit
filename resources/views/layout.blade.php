<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quantum IT Innovation</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Quantum IT Innovation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @auth
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item dropdown d-flex">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="">Logout</a></li>
                            </ul>
                        </li>
                    </ul>

                @endauth
                @guest
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item p-2">
                            <a class="nav-link btn btn-danger px-3" aria-current="page" href="{{route('login')}}">Login</a>
                        </li>
                    </ul>
                @endguest
            </div>
        </div>
    </nav>
    @if ($message = Session::pull('success'))
        <div class="alert alert-success  fade show alert-dismissible" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif ($message = Session::pull('error'))
        <div class="alert alert-danger  fade show alert-dismissible" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @yield('content')

<!-- Footer -->
<footer class="page-footer font-small blue fixed-bottom bg-body-tertiary">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2023 Copyright:
    <a href="/"> Suyog Kulkarni</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/57600c61b5.js" crossorigin="anonymous"></script>
</body>

</html>
