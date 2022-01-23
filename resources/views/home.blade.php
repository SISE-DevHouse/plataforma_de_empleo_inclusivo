<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Free Dental Medical Hospital Website Template | Smarteyeapps.com</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
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
                                <i class="fas fa-globe-americas"></i>
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
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail">
                                {{ Auth::user()->dni }}
                            </div>
                        </div>


                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail">
                                Discapacidad: <br>
                                {{Auth::user()->tipodiscapacidad}}
                            </div>
                        </div>



                        <h4 class="ltitle">Contacto</h4>
                        <ul class="row social-link no-margin">

                            <li><i class="fab fa-whatsapp"> {{Auth::user()->telefono}}</i></li>
                            <li><i class="fab fa-google-plus-g"> {{ Auth::user()->email }}</i></li>


                        </ul>
                        <h4 class="ltitle">Referencess</h4>

                        <div class="refer-cov">
                            <b>Jonney Smith</b>
                            <p>CEO Casinocarol</p>
                            <span>p +00 890 1232 8767</span>
                        </div>
                        <div class="refer-cov">
                            <b>Jonney Smith</b>
                            <p>System Administrator</p>
                            <span>p +00 890 1232 8767</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-8 rt-div">
                    <div class="rit-cover">
                        <div class="hotkey">
                            <h1 class="">{{ Auth::user()->name }} <br> {{ Auth::user()->apellidos }} </h1>
                            <small>INFORMACIÓN</small>
                        </div>
                        <h2 class="rit-titl"><i class="far fa-user"></i> Perfil</h2>
                        <div class="about">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan purus enim, a
                                vestibulum est tristique sit amet. Suspendisse nibh nisl, imperdiet sit amet mi vitae,
                                elementum elementum nibh. Vivamus vitae eros malesuada, convallis dolor malesuada,
                                lobortis ex. Sed cursus augue risus, ac semper est consectetur vitae. Praesent consequat
                                metus sit amet rhoncus luctus.</p>
                            <div class="btn-ro row no-margin">
                                <ul class="btn-link">

                                    <li>
                                        <a href="#"><i class="fas fa-cloud-download-alt"></i>Descargar Curriculum</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-briefcase"></i> Experiencia</h2>
                        <div class="work-exp">
                            <textarea name="" id="" cols="68" rows="10" readonly style="border: none;">{{ Auth::user()->experiencia }} </textarea>
                        </div>



                        <h2 class="rit-titl"><i class="fas fa-graduation-cap"></i> Educación</h2>
                        <div class="education">
                            <ul class="row no-margin">
                                <li class="col-md-6"><span>Nivel</span> <br>
                                    {{ Auth::user()->educacion }}
                                </li>

                                <li class="col-md-6"><span>Especificación</span> <br>
                                    {{ Auth::user()->espeedu }}
                                </li>

                            </ul>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-users-cog"></i> Habilidades</h2>
                        <div class="profess-cover row no-margin">




                            <textarea name="" id="" cols="68" rows="5" readonly style="border: none;">{{ Auth::user()->habilidades }} </textarea>


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