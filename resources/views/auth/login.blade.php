@extends('layouts.app')

@section('content')


<section class="pabsolutetop py-4">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
            <div class="col-12 py-4 ps-5">
                        
                        <img src="img/imagen2.jpg" class="img-fluid rounded-pill" alt="">
                        <h1 class="display-4" style="color: rgb(158, 77, 19);">Generando la igualdad de oportunidades.
            </h1>
                        </div>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">

                <h2 class="text-muted">¡Trabaja sin limites!</h2>
                    @csrf<div
                        class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Inicia Session</p>
                    </div>

                    <div class="divider d-flex align-items-center my-4">
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4 validate-input m-b-16" data-validate="Requiere ingresar un Email">
                        <input id="email" type="email"
                            class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email"
                            placeholder="{{ __('Ingrese E-Mail') }}" autofocus>

                        @error('email')
                        <span class="focus-input100 invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3" validate-input m-b-16"
                        data-validate="Requiere ingresar una contraseña">
                        <input id="password"
                            class="form-control  form-control-lg @error('password') is-invalid @enderror"
                            type="password" name="password" placeholder="{{ __('Password') }} " required
                            autocomplete="current-password">

                        @error('password') 
                        <span class="focus-input100 invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Recordar session
                            </label>
                        </div>
                        <a href="#!" class="text-body">Forgot password?</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">


                        <button type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">
                            {{ __('Login') }}
                        </button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta?
                            @if (Route::has('register'))
                            <a class="link-danger" href="{{ route('register') }}">Registrate</a>
                            @endif
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>




<!--Footer-->


<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

@endsection