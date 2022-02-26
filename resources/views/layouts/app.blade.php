<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'INICIO') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- PARA ICONOS -->
    <script src="https://kit.fontawesome.com/a481dc1a78.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    
    <link rel="shortcut icon" href="assets/images/fav.jpg"> 
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>






    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="img/CP Inclusion-blanco.png" alt="" width="250">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                @if(Auth::check()&&Auth::user()->role=="administrador" )

                <ul class="navbar-nav me-auto">

                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('empresas.index') }}"><i class="fas fa-building">{{ __('Empresas') }}</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('distritos.index') }}"><i class="fas fa-search-location">{{ __('Distritos') }}</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('usuarios.index') }}"> <i class="fas fa-user">{{ __('usuarios') }}</i></a>
                    </li>
                </ul>
                
                @else





               @endif





                

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    </li>
                    @endif


                    @if (Route::has('enviar-solicitud2'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('enviar-solicitud2') }}">{{ __('Enviar Solicitud') }}</a>
                    </li>
                    @endif

                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user"></i> {{ Auth::user()->email }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         
                            @if(Auth::check()&&Auth::user()->role=="usuario" )
                         <a class="dropdown-item" href="{{ Url('EditarPerfil',Auth::user()->id) }}">
                            <i class="fas fa-user-edit">  {{ __('Editar Perfil') }}</i></a> 

    
                            @else
    
                            @endif


                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt">  {{ __('Cerrar Sesión') }}</i>
                            </a>
                            

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
   
   
  





                

@yield('content')






 




    <footer
        
    style="  position: absolute;
    bottom: 0;
    width: 100%;"
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-1 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            Copyright © 2022. Todos los derechos reservados
        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
        </div>
        <!-- Right -->
    </footer>



 
</body>

</html>