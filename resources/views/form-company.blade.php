

<section>

    <div class="container-fluid h-custom py-4">
        <div class="" style=" overflow-x: hidden; display: block;width: 100%">

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">

                <div class="row pt-4 ps-5">
                     


                
                        <div class="col-12 py-4 ps-5">
                        
                        <img src="img/imagenenviarsolicitud.jpg" class="img-fluid" alt="">
                            <p class="fs-1" style="color: rgb(206, 117, 29);">Conviertete hoy en una empresa inclusiva.
                        </div>
                    </div>

                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <form class="login100-form validate-form flex-sb flex-w" method="POST"
                        action="{{ route('empresa')}}">

                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3"></p>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4 validate-input m-b-16"
                            data-validate="Requiere ingresar el nombre de la empresa">
                            <input id="nombreempresa" type="text"
                                class="form-control form-control-lg @error('nombreEmpresa') is-invalid @enderror"
                                name="nombreempresa" value="{{ old('nombreEmpresa') }}" required
                                placeholder="{{ __('Nombre de la empresa') }}" autofocus>

                            @error('nombreEmpresa')
                            <span class="focus-input100 invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3" validate-input m-b-16"
                            data-validate="Requiere ingresar una contrase??a">
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




                        <div class="form-outline mb-3 validate-input m-b-16" data-validate="Requiere ingresar un correo">
                            <input id="correo" class="form-control  form-control-lg @error('correo') is-invalid @enderror" type="text" name="correo" placeholder="{{ __('Correo') }} " value="{{ old('correo') }}" required autocomplete="correo">
    
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
                            data-validate="Requiere ingresar un direccion">
                           
                        <select name="id_distrito" id="id_distrito" class="form-select">

                        <option class="form-control">Seleccione:</option>

@isset($distrito)
    

                        
                        @foreach ($distrito as $dis)
                                
                        
                        <option class="form-control" value="{{isset($dis->id)?$dis->id:''}}">{{isset($dis->nombre)?$dis->nombre:''}}</option>
@endforeach
                   
@endisset

                        </select>



                            @error('direccion')
                            <span class="focus-input100 invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>





                    <div class="form-outline mb-3">
                       <textarea class="form-control" name="asunto" onkeyup="mayuscula(this);" placeholder="ASUNTO.." id="asunto" cols="42" rows="5"></textarea>
                       
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
        </div>



</section>


<script>function mayuscula(e) {
    e.value = e.value.toUpperCase();
}</script>


<!--Footer-->


<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 