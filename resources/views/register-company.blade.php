@extends('layouts.app')

@section('content')

<section>

    <div class="container-fluid h-custom py-4">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">

                <div class="row pt-4 ps-5">
                     


                
                        <div class="col-12 py-4 ps-5">
                        
                        <img src="img/imagen1.jpg" class="img-fluid rounded-pill" alt="">
                            <p class="fs-1" style="color: rgb(206, 117, 29);">Conviertete hoy en una empresa inclusiva.
                        </div>
                    </div>

                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <form class="login100-form validate-form flex-sb flex-w" method="POST"
                        action="{{ route('login') }}">

                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3"></p>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4 validate-input m-b-16"
                            data-validate="Requiere ingresar el nombre de la empresa">
                            <input id="nombreEmpresa" type="text"
                                class="form-control form-control-lg @error('nombreEmpresa') is-invalid @enderror"
                                name="nombreEmpresa" value="{{ old('nombreEmpresa') }}" required
                                placeholder="{{ __('Ingresar el nombre de la emrpresa') }}" autofocus>

                            @error('nombreEmpresa')
                            <span class="focus-input100 invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3" validate-input m-b-16"
                            data-validate="Requiere ingresar una contraseña">
                            <input id="ruc" class="form-control  form-control-lg @error('ruc') is-invalid @enderror"
                                type="text" name="ruc" placeholder="{{ __('RUC') }} " required>

                            @error('ruc')
                            <span class="focus-input100 invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <!-- Password input -->
                        <div class="form-outline mb-3" validate-input m-b-16" data-validate="Requiere ingresar un ruc">
                            <input id="ruc" class="form-control  form-control-lg @error('ruc') is-invalid @enderror"
                                type="text" name="ruc" placeholder="{{ __('RUC') }} " required>

                            @error('ruc')
                            <span class="focus-input100 invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-3" validate-input m-b-16"
                            data-validate="Requiere ingresar un telefono">
                            <input id="telefono"
                                class="form-control  form-control-lg @error('telefono') is-invalid @enderror"
                                type="text" name="telefono" placeholder="{{ __('Telefono') }} " required>

                            @error('telefono')
                            <span class="focus-input100 invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-outline mb-3" validate-input m-b-16"
                            data-validate="Requiere ingresar un correo">
                            <input id="correo"
                                class="form-control  form-control-lg @error('correo') is-invalid @enderror" type="text"
                                name="email" placeholder="{{ __('Correo') }} " value="{{ old('email') }}" required
                                autocomplete="email">

                            @error('correo')
                            <span class="focus-input100 invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>



                        <div class="form-outline mb-3" validate-input m-b-16"
                            data-validate="Requiere ingresar un direccion">
                            <input id="direccion"
                                class="form-control  form-control-lg @error('direccion') is-invalid @enderror"
                                type="text" name="direccion" placeholder="{{ __('Direccion') }} " required
                                autocomplete="direccion">

                            @error('direccion')
                            <span class="focus-input100 invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>






                        <div class="form-outline mb-3" validate-input m-b-16"
                            data-validate="Requiere ingresar un distrito">
                            <input id="distrito"
                                class="form-control  form-control-lg @error('distrito') is-invalid @enderror"
                                type="text" name="distrito" placeholder="{{ __('Distrito') }} " required>

                            @error('correo')
                            <span class="focus-input100 invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">


                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">
                                {{ __('Enviar Solicitud') }}
                            </button>
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