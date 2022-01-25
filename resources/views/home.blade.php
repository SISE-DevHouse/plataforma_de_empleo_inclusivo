@extends('layouts.app')

@section('content')



<head>
    <meta charset="utf-8">º
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Free Dental Medical Hospital Website Template | Smarteyeapps.com</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

<!-- PARA ICONOS -->
<script src="https://kit.fontawesome.com/a481dc1a78.js" crossorigin="anonymous"></script>
    
 
</head>

<body>


    <!--  DESCOMENTAR
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
-->

    <div class="container-fluid overcover">
        <div class="container profile-box">
            <div class="row">
                <div class="col-md-4 left-co">
                    <div class="left-side">
                        <div class="profile-info">

                            @if (isset(Auth::user()->foto))

                            <img src="{{asset('storage').'/'.Auth::user()->foto}}">
                            @else
                            <img src="assets/images/usuario.png">

                            @endif


                            <h3>{{ Auth::user()->name }}</h3>
                            <span>USUARIO</span>
                        </div>
                        <div class="center">
                            <a href="{{url('EditarPerfil', Auth::user()->id)}}" class="btn btn-warning">Editar Perfil</a>
                        </div>
                        <h4 class="ltitle">Información Personal</h4>
                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="detail">
                                {{ Auth::user()->telefono }} <br>
                                {{ Auth::user()->telefono2 }}
                            </div>
                        </div>
                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-at"></i>
                            </div>
                            <div class="detail">
                                {{ Auth::user()->email }}<br>

                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail">
                                {{ Auth::user()->direccion }}
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="icon">
                               <i class="fas fa-user-shield"></i>
                            </div>
                            <div class="detail">
                                
                               {{ isset(Auth::user()->name)?Auth::user()->name:''}}
                               <br>
                               {{ isset(Auth::user()->apellidos)?Auth::user()->apellidos:''}}
                            </div>

                        
                        </div>

                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <div class="detail">
                                {{ Auth::user()->dni }}
                            </div>
                        </div>


                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-wheelchair"></i>
                            </div>
                            <div class="detail">
                                Discapacidad: <br>
                                {{Auth::user()->tipodiscapacidad}}
                            </div>
                        </div>



                        <h4 class="ltitle">Contacto</h4>
                        <ul class="row social-link no-margin">

                            <li><i class="fab fa-whatsapp"> {{Auth::user()->telefono}}</i></li>
                            <li><i class="fab fa-google-plus-g"></i> {{ Auth::user()->email }}</i></li>


                        </ul>
                       

                    </div>
                </div>
                
                <div class="col-md-8 rt-div">
                    <div class="rit-cover">
                        <div class="hotkey">
                            <h1 class="">{{ Auth::user()->name}} <br> {{ Auth::user()->apellido}} </h1>
                            <small>INFORMACIÓN</small>
                        </div>
                        <h2 class="rit-titl"><i class="far fa-user"></i> Perfil</h2>
                        <div class="about">
                            <p><textarea name="perfil" id="perfil" cols="68" rows="5" readonly style="border: none;">{{ Auth::user()->perfil }} </textarea></p>
                            <div class="btn-ro row no-margin">
                                <ul class="btn-link">
                                    <li>
                                        <a href=""><i class="fas fa-paper-plane"></i><input type="file"> Subir Archivo</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-briefcase"></i> Experiencia</h2>
                        <div class="work-exp">
                           
                           <textarea name="experiencia" id="experiencia"  cols="68" rows="10" readonly style="border: none;">{{ Auth::user()->experiencia}}</textarea>
                           
                        </div>



                        <h2 class="rit-titl"><i class="fas fa-graduation-cap"></i> Educación</h2>
                        <div class="education">
                            <ul class="row no-margin">
                                <li class="col-md-6"><span>Educación</span> 
                                    <br>
                                       {{ Auth::user()->educacion}}
                                       
                                </li> 
                                <li class="col-md-6"><span>Expecifique</span> <br>
                                    <textarea name="espeedu" id="espeedu" cols="30" rows="2" readonly style="border: none;">{{ Auth::user()->espeedu}}</textarea></li>
                                
                            </ul>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-users-cog"></i> Habilidades</h2>
                        <div class="profess-cover row no-margin">
                           <textarea name="habilidades" id="habilidades" cols="68" rows="5" readonly style="border: none;">{{ Auth::user()->habilidades}}</textarea>
                            </div>






                        </div>
                    </div>
            </div>
        </div>
    </div>

</body>


<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>


@endsection