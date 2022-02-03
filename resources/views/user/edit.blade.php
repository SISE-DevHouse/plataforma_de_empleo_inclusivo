@extends('layouts.app')

@section('template_title')
    Editar Usuarios
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Usuarios</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuarios.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('user.form',['valor'=>'Editar'])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
