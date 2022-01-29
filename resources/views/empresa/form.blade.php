<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreempresa') }}
            {{ Form::text('nombreempresa', $empresa->nombreempresa, ['class' => 'form-control' . ($errors->has('nombreempresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombreempresa']) }}
            {!! $errors->first('nombreempresa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ruc') }}
            {{ Form::text('ruc', $empresa->ruc, ['class' => 'form-control' . ($errors->has('ruc') ? ' is-invalid' : ''), 'placeholder' => 'Ruc']) }}
            {!! $errors->first('ruc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $empresa->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $empresa->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $empresa->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('distrito') }}
            {{ Form::Select('id_distrito',$distrito ,$empresa->id_distrito, ['class' => 'form-control' . ($errors->has('id_distrito') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('id_distrito', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('asunto') }}
            {{ Form::text('asunto', $empresa->asunto, ['class' => 'form-control' . ($errors->has('asunto') ? ' is-invalid' : ''), 'placeholder' => 'Asunto']) }}
            {!! $errors->first('asunto', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{$valor}}</button>
    </div>
</div>