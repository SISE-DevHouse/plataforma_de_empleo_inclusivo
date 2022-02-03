<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dni') }}
            {{ Form::text('dni', $user->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $user->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $user->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono2') }}
            {{ Form::text('telefono2', $user->telefono2, ['class' => 'form-control' . ($errors->has('telefono2') ? ' is-invalid' : ''), 'placeholder' => 'Telefono2']) }}
            {!! $errors->first('telefono2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipodiscapacidad') }}
            {{ Form::text('tipodiscapacidad', $user->tipodiscapacidad, ['class' => 'form-control' . ($errors->has('tipodiscapacidad') ? ' is-invalid' : ''), 'placeholder' => 'Tipodiscapacidad']) }}
            {!! $errors->first('tipodiscapacidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $user->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
     
        <div class="form-group">
            {{ Form::label('experiencia') }}
            {{ Form::text('experiencia', $user->experiencia, ['class' => 'form-control' . ($errors->has('experiencia') ? ' is-invalid' : ''), 'placeholder' => 'Experiencia']) }}
            {!! $errors->first('experiencia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('educacion') }}
            {{ Form::text('educacion', $user->educacion, ['class' => 'form-control' . ($errors->has('educacion') ? ' is-invalid' : ''), 'placeholder' => 'Educacion']) }}
            {!! $errors->first('educacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('espeedu') }}
            {{ Form::text('espeedu', $user->espeedu, ['class' => 'form-control' . ($errors->has('espeedu') ? ' is-invalid' : ''), 'placeholder' => 'Espeedu']) }}
            {!! $errors->first('espeedu', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habilidades') }}
            {{ Form::text('habilidades', $user->habilidades, ['class' => 'form-control' . ($errors->has('habilidades') ? ' is-invalid' : ''), 'placeholder' => 'Habilidades']) }}
            {!! $errors->first('habilidades', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('role') }}
            {{ Form::text('role', $user->role, ['class' => 'form-control' . ($errors->has('role') ? ' is-invalid' : ''), 'placeholder' => 'Role']) }}
            {!! $errors->first('role', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('perfil') }}
            {{ Form::text('perfil', $user->perfil, ['class' => 'form-control' . ($errors->has('perfil') ? ' is-invalid' : ''), 'placeholder' => 'Perfil']) }}
            {!! $errors->first('perfil', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{$valor}}</button>
    </div>
</div>