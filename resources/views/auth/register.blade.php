@extends('layouts.app')

@section('content')




<section>

    <div class="container-fluid h-custom py-4">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">

                <div class="row pt-4 ps-5">




                    <div class="col-12 py-4 ps-5">

                        <img src="img/imagen2.jpg" class="img-fluid rounded-pill" alt="">
                        <p class="fs-1" style="color: rgb(206, 117, 29);">Registrate ahora y empieza a tener propuestas laborales.
                    </div>
                </div>

            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- -->
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3"></p>
                    </div>

                    <div class="divider d-flex align-items-center my-4">
                    </div>


                    <!-- Password input -->
                    <div class="form-outline mb-3  validate-input m-b-16" data-validate="Requiere ingresar un nombre">
                        <input id="name" class="form-control  form-control-lg @error('name') is-invalid @enderror" type="text" name="name" placeholder="{{ __('Nombre del postulante') }} " required autofocus>

                        @error('name')
                        <span class="focus-input100 invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4 validate-input m-b-16" data-validate="Requiere ingresar un email">
                        <input id="email" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="{{ __('Ingresar el email') }}" >

                        @error('email')
                        <span class="focus-input100 invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                
                    <div class="form-outline mb-3 validate-input m-b-16" data-validate="Requiere ingresar una contraseña">
                        <input id="password" class="form-control  form-control-lg @error('password') is-invalid @enderror" type="password" name="password" placeholder="{{ __('Contraseña del cliente') }} " required>

                        @error('password')
                        <span class="focus-input100 invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="form-outline mb-3 validate-input m-b-16" data-validate="Requiere ingresar una contraseña">
                        <input id="password-confirm" class="form-control  form-control-lg @error('password-confirm') is-invalid @enderror" type="password" name="password_confirmation" placeholder="{{ __('Contraseña del cliente') }} " required>


                    </div>


                  
                        <input id="role"  type="hidden" name="role" value="usuario" >



                    <!-- -->
                    <div class="row mb-0">
                        <div class="col-md-15 offset-md-15">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</section>



@endsection