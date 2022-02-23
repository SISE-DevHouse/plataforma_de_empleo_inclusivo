<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            
            <label for="">Nombre Empresa</label>
            <Input class="form-control" value="{{isset($empresa->nombreempresa)?$empresa->nombreempresa:''}}" name="nombreempresa" placeholder="Nombre Empresa"></Input>

        </div>
        <div class="form-group">

            <label for="">Ruc</label>
            <Input class="form-control" value="{{isset($empresa->ruc)?$empresa->ruc:''}}" name="ruc" placeholder="Ruc"></Input>



        </div>
        <div class="form-group">

            <label for="">Telefono</label>
            <Input class="form-control" value="{{isset($empresa->telefono)?$empresa->telefono:''}}" name="telefono" placeholder="Telefono"></Input>


        </div>
        <div class="form-group">
            


            <label for="">Correo</label>
            <Input class="form-control" value="{{isset($empresa->correo)?$empresa->correo:''}}" name="correo" placeholder="Correo"></Input>


           
        </div>
        <div class="form-group">

            <label for="">Direccion</label>
            <Input class="form-control" value="{{isset($empresa->direccion)?$empresa->direccion:''}}" name="direccion" placeholder="Direccion"></Input>

        </div>
        <div class="form-group">

            <label for="">Correo</label>
           
            


            <select name="id_distrito" id="" class="form-select" aria-label="Default select example">
            
                <option value="{{isset($empresa->id_distrito)?$empresa->id_distrito:''}}">Seleccione: {{isset($empresa->distrito->nombre)?$empresa->distrito->nombre:''}}</option>
                @foreach ($distrito as $dis)
                <option value="{{isset($dis->id)?$dis->id:''}}">{{isset($dis->nombre)?$dis->nombre:''}}</option>
            @endforeach
            </select>

        </div>
        <div class="form-group">


            <label for="">Asunto</label>
            <Input class="form-control" value="{{isset($empresa->asunto)?$empresa->asunto:''}}" name="asunto" placeholder="Asunto"></Input>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{$valor}}</button>
    </div>
</div>