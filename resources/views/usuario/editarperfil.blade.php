

@extends('layouts.app')

@section('content')



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Free Dental Medical Hospital Website Template | Smarteyeapps.com</title>

    <link rel="shortcut icon" href="/assets/images/fav.jpg">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
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

<form method="POST" action="{{Url('EditarPerfil',Auth::user()->id)}}"  role="form" enctype="multipart/form-data">
    
    {{ method_field('PATCH') }}
    @csrf

  






    <div class="container-fluid overcover">
        <div class="container profile-box">
            <div class="row">
                <div class="col-md-4 left-co">
                    <div class="left-side">
                        <div class="profile-info">

                            @if(isset($perfil->foto))
                            <img src="{{asset('storage').'/'.$perfil->foto}}" alt="160" width="160">
                            @endisset
                            <h3>{{ isset($perfil->name)?$perfil->name:''}}</h3>

                            <span>USUARIO</span>

                            <span><input type="file" name="foto"        id="foto"       class="form-control"></span>

                            <!--falta subir CV creo revisar-->
                            
                        </div>

                        <div class="center">

                            
                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                        </div>
                        
                        <h4 class="ltitle">Información Personal</h4>
                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                        
                                
                           
                            <div class="detail">

                                <input type="text" placeholder="Telefono" required class="form-control" name="telefono" id="telefono" value="{{ isset($perfil->telefono)?$perfil->telefono:''}}">
                                
                                
                            </div>
                        </div>

                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                        
                                
                           
                            <div class="detail">

                                
                                <input type="text" placeholder="Telefono Opcional" class="form-control" name="telefono2"  value="{{ isset($perfil->telefono2)?$perfil->telefono2:''}}">
                                
                            </div>
                        </div>




                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <div class="detail">
                                <input type="text" placeholder="Email" class="form-control" name="email" value="{{ isset($perfil->email)?$perfil->email:''}}">

                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail">
                                
                                <input type="text" placeholder="Direccion" class="form-control" required name="direccion" value="{{ isset($perfil->direccion)?$perfil->direccion:''}}">
                                

                                <select name="direccion" id="direccion" class="form-control">
                                  <option value="{{isset($perfil->direccion)?$perfil->direccion:''}}" >Seleccione: {{isset($perfil->direccion)?$perfil->direccion:''}}</option>  
                                <!-- 
                                  @foreach ($distrito as $dis)

                                    <option value="{{$dis->nombre}}" class="form-control" >{{$dis->nombre}}</option>
                                    @endforeach
                                -->
                                </select>


                            </div>

                        
                        </div>

                <div class="contact-box">
                            <div class="icon">
                               <i class="fas fa-user-shield"></i>
                            </div>
                            <div class="detail">
                                
                                <input type="text" placeholder="Nombre" class="form-control" required name="name" value="{{ isset($perfil->name)?$perfil->name:''}}">
                                <input type="text" placeholder="Apeliidos" class="form-control" required name="apellidos" value="{{ isset($perfil->apellidos)?$perfil->apellidos:''}}">
                                <input type="text" placeholder="Direccion" class="form-control" name="direccion" value="{{ isset($perfil->direccion)?$perfil->direccion:''}}">
                            </div>

                        
                        </div>

                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail">
                                
                                <input type="text" placeholder="DNI" class="form-control" name="dni" value="{{ isset($perfil->dni)?$perfil->dni:''}}">
                            </div>

                        
                        </div>

                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail">
                                <select name="tipodiscapacidad" id="tipodiscapacidad" class="form-control" >
                                    <option value="{{isset(Auth::user()->tipodiscapacidad)?Auth::user()->tipodiscapacidad:''}}">Seleccione: {{isset(Auth::user()->tipodiscapacidad)?Auth::user()->tipodiscapacidad:''}}</option>
                                    <option value="Fisica">Fisica</option>
                                    <option value="Mental">Mental</option>
                                    <option value="Sensorial">Sensorial</option>
                                    <option value="Intelectual">Intelectual</option>
                                </select>
                            </div>
                        </div>




                        <h4 class="ltitle">Contacto</h4>
                        <ul class="row social-link no-margin">

                            <li><i class="fab fa-whatsapp"> {{isset(Auth::user()->telefono)?Auth::user()->telefono:''}}</i></li>
                            <li><i class="fab fa-google-plus-g"> {{ isset(Auth::user()->email)?Auth::user()->email:''}}</i></li>


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
                            <h1 class="">{{ isset(Auth::user()->name)?Auth::user()->name:'' }} <br> {{ isset(Auth::user()->apellidos)?Auth::user()->apellidos:'' }} </h1>
                            <small>INFORMACIÓN</small>
                        </div>
                        <h2 class="rit-titl"><i class="far fa-user"></i> Perfil</h2>
                        <div class="about">

                            <textarea name="perfil" id="perfil" placeholder="ESCRIBIR PERFIL..." cols="68" rows="10" style="border: none;">{{ isset($perfil->perfil)?$perfil->perfil:''}}</textarea>
                            
                            <div class="btn-ro row no-margin">
                                <ul class="btn-link">
                                    <li>
                                        <a href=""><i class="fas fa-paper-plane"></i><input type="file" name="curriculum" id="curriculum" class="form-control"> Subir Archivo</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-briefcase"></i> Experiencia</h2>
                        <div class="work-exp">
                           
                           <textarea name="experiencia" id="experiencia" placeholder="ESCRIBIR EXPERIENCIA..." cols="68" rows="10" style="border: none;">{{ isset($perfil->experiencia)?$perfil->experiencia:''}}</textarea>
                           
                        </div>



                        <h2 class="rit-titl"><i class="fas fa-graduation-cap"></i> Educación</h2>
                        <div class="education">
                            <ul class="row no-margin">
                                <li class="col-md-6"><span>Educación</span> <br>
                                    <select name="educacion" id="educacion" class="form-control">
                                        <option value="{{ isset($perfil->educacion)?$perfil->educacion:''}}">Seleccione:{{ isset($perfil->educacion)?$perfil->educacion:''}}</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Secundaria</option>
                                        <option value="Tecnico">Tecnico</option>
                                        <option value="Superior">Superior</option>
                                    </select>
                                </li>
                                <li class="col-md-6"><span>Expecifique</span> <br>
                                    <textarea name="espeedu" id="espeedu" cols="30" rows="2" style="border: none;" placeholder="ESPECIFIQUE...">{{ isset($perfil->espeedu)?$perfil->espeedu:''}}</textarea></li>
                                
                            </ul>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-users-cog"></i> Habilidades</h2>
                        <div class="profess-cover row no-margin">
                           <textarea name="habilidades" id="habilidades" cols="68" rows="5" style="border: none;" placeholder="ESCRIBIR HABILIDADES...">{{ isset($perfil->habilidades)?$perfil->habilidades:''}}</textarea>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>

</body>


<script src="/assets/js/jquery-3.2.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/script.js"></script>

@endsection