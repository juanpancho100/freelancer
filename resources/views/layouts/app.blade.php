<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Freelancer Test') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/screen.css') }}" rel="stylesheet">
</head>
<body id="xd">

<div class="container-fluid">
    <div class="row flex-nowrap">
    @if(Auth::user())
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/home" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Inicio</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="/perfil" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline" style="color: #79f3ff">Perfil</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline" style="color: #79f3ff">Anuncios</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        <li class="w-100">
                                <a href="/crear" class="nav-link px-0"> <span class="d-none d-sm-inline" style="color: #79f3ff">Crear</span></a>
                            </li>
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline" style="color: #79f3ff">Editar</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline" style="color: #79f3ff">Borrar</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline" style="color: #79f3ff">Empresas</span></a>
                    </li>
                    
                    
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="data:image/jpeg;base64,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" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        
                        <span class="d-none d-sm-inline mx-1">{{Auth::user()->name}}</span>
                        
                        
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" id="xd2">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-menu dropdown-menu-right nav-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endif
        <div class="container py-3" >
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
