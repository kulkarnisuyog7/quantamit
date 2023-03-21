<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- material icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <script src="https://kit.fontawesome.com/57600c61b5.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-dark text-white mt-3 p-3">Admin-Pannel</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3  bg-dark text-white"
                    href="{{route('dashboard')}}">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3  bg-dark text-white"
                    href="{{route('loadcompanies')}}">Company</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3  bg-dark text-white"
                    href="{{route('loademployees')}}">Employee</a>
                
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-danger" id="sidebarToggle">Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Change Password</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @if ($message = Session::pull('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif ($message = Session::pull('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!--Page content starts-->
            @yield('content')
            <!-- Page content ends-->
            
        </div>
    </div>
    
    <!-- SCRIPTS -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/admin.js"></script>
</body>

</html>
