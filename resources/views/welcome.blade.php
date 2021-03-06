@extends('layouts.app')

@section('content')


<!--
    
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
    -->
<!--Cuepo-->


<div style="overflow-y: scroll; height: calc(100% - 120px);">


<div class="container-fluid">

    <div class="row bg-light">

        <div class="col-sm-6 text-center px-5" style="margin-top: 75px;">
            <h1 class="display-4" style="color: rgb(158, 77, 19);">Generando la igualdad de oportunidades.
            </h1>
            <h2 class="text-muted">¡Trabaja sin limites!</h2>
        </div>

        <div class="col-sm-6 ps-5 py-3"> <img src="img/imagen1.jpg" class="img-fluid img-thumbnail" alt=""> </div>

    </div>

</div>


<div class="container card shadow text-center w-50 my-4 mx-auto p-5">
    <h2>¿Cual es nuestro objetivo?</h2>
    <p>Apoyar a las personas con discapacidad en la búsqueda de un empleo y asesorar a las instituciones y empresas para
        que realicen procesos de inclusión efectivos.</p>
</div>


<div class="container-fluid">

    <div class="row  py-2" style="background-color: rgb(241, 239, 216);">

        <div class="col-4 ps-4 py-1"><img src="img/imagen2.jpg" class="img-fluid rounded-pill" alt=""></div>
        <div class="col-8 text-center py-5">
            <p class="fs-3">Registrate ahora y empieza a tener propuestas laborales.</p>


            @if (Route::has('register'))
            <a class="btn btn-outline-secondary btn-lg" href="{{ route('register') }}">Registrarse</a>
            @endif
        </div>

    </div>


    <div class="row pt-4 ps-5" style="background-color: rgb(252, 244, 238);">

        <div class="col py-4 ps-5">
            <p class="fs-1" style="color: rgb(206, 117, 29);">Conviertete hoy en una empresa inclusiva. <br> Envia tu
                solicitud.</p>
        </div>
        <div class="col text-center py-5 "><a class="btn btn-outline-secondary btn-lg" href="{{Route('enviar-solicitud2')}}">Enviar solicitud</a></div>

    </div>




</div>


</div>



<!--Footer-->


<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

@endsection