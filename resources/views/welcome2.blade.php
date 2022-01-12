<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Empleo Inclusivo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main">

    
</head>
<body>
   
    <!--Navbar-->
   
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/CP Inclusion-blanco.png" alt="" width="250">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--nav justify-content-end navbar izquierda-->    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto" style="font-size: 18px; ">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ingresar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contactanos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <!--Cuepo-->

    <div class="container-fluid">

        <div class="row bg-light" >

            <div class="col-sm-6 text-center px-5" style="margin-top: 75px;"> <h1 class="display-4" style="color: rgb(158, 77, 19);">Generando la igualdad de oportunidades.
            </h1> <h2 class="text-muted">¡Trabaja sin limites!</h2></div>

            <div class="col-sm-6 ps-5 py-3"> <img src="img/imagen1.jpg" class="img-fluid img-thumbnail"  alt="" > </div>

        </div>

    </div>    


    <div class="container card shadow text-center w-50 my-4 mx-auto p-5">
        <h2>¿Cual es nuestro objetivo?</h2>
        <p>Apoyar a las personas con discapacidad en la búsqueda de un empleo y asesorar a las instituciones y empresas para que realicen procesos de inclusión efectivos.</p>
    </div>  


    <div class="container-fluid">

        <div class="row  py-2" style="background-color: rgb(241, 239, 216);">

            <div class="col-4 ps-4 py-1"><img src="img/imagen2.jpg" class="img-fluid rounded-pill" alt=""></div>
            <div class="col-8 text-center py-5" >
                <p class="fs-3">Registrate ahora y empieza a tener propuestas laborales.</p>
                <button type="button" class="btn btn-outline-secondary btn-lg">Registrarse</button>
            </div> 

        </div>


        <div class="row pt-4 ps-5" style="background-color: rgb(252, 244, 238);">

            <div class="col py-4 ps-5"><p class="fs-1" style="color: rgb(206, 117, 29);">Conviertete hoy en una empresa inclusiva. <br> Envia tu solicitud.</p></div>
            <div class="col text-center py-5 "><button type="button" class="btn btn-outline-secondary btn-lg">Enviar Solicitud</button></div>

        </div>

    <div class="contaier">
        <footer>
         Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
      
        </footer>

    </div>
    

    </div>
           
    

    

    

    <!--Footer-->


<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>