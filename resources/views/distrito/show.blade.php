@extends('layouts.app')

@section('template_title')
    {{ $distrito->name ?? 'Show Distrito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <div class="float-left">
                            <span class="card-title display-6">Detalle Distrito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('distritos.index') }}"><i class="fas fa-arrow-left"> Atras</i></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $distrito->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer bg-primary text-center text-white">
            <i class="fas fa-laptop-code display-4"> Detalle Distrito</i>
          </div>
          <br>
<div class="text-center">
          <div class="spinner-border text-primary">
            <div><i class="fas fa-globe fa-2x"></i></div>
        </div>
    </div>
    </section>
@endsection
