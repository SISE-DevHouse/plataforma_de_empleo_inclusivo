<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">

            
            <label for="">Nombre Distrito</label>
            <Input class="form-control" value="{{isset($distrito->nombre)?$distrito->nombre:''}}" name="nombre" placeholder="Nombre Distrito"></Input>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{$valor}}</button>
    </div>
</div>