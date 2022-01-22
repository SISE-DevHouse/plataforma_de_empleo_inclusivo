@extends('layouts.app')

@section('template_title')
    {{ $distrito->name ?? 'Show Distrito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Distrito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('distritos.index') }}"> Back</a>
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
    </section>
@endsection
