@extends('layouts.app')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="float-left">
                            <span class="card-title display-6">Detalle Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('empresas.index') }}"><i class="fas fa-arrow-left"> Atras</i></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombreempresa:</strong>
                            {{ $empresa->nombreempresa }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $empresa->ruc }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empresa->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $empresa->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $empresa->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Distrito:</strong>
                            {{ $empresa->distrito->nombre }}
                        </div>
                        <div class="form-group">
                           <h1><strong>ASUNTO</strong></h1> 
                            <br>
                            <textarea name="" id="" cols="60" rows="5" readonly style="background-color: #94d3ec;">{{ $empresa->asunto}}</textarea>
                            
                          

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer bg-primary text-center text-white">
            <i class="fas fa-laptop-code display-4"> Detalle Empresa</i>
          </div>
          <br>
<div class="text-center">
          <div class="spinner-border text-primary">
            <div><i class="fas fa-building fa-2x"></i></div>
        </div>
    </div>
    </section>
@endsection
