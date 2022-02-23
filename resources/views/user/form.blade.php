<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">

            <label for="">Nombre</label>
            <Input class="form-control" value="{{isset($user->name)?$user->name:''}}" name="name" placeholder="Nombre"></Input>

        </div>
        <div class="form-group">

            <label for="">Email</label>
            <Input class="form-control" value="{{isset($user->email)?$user->email:''}}" name="email" placeholder="Email"></Input>

           
        </div>
        <div class="form-group">

            <label for="">DNI</label>
            <Input class="form-control" value="{{isset($user->dni)?$user->dni:''}}" name="dni" placeholder="DNI"></Input>

            
        </div>
        <div class="form-group">

            <label for="">Apellidos</label>
            <Input class="form-control" value="{{isset($user->apellidos)?$user->apellidos:''}}" name="apellidos" placeholder="Apellidos"></Input>


        </div>
        <div class="form-group">

            <label for="">Telefono</label>
            <Input class="form-control" value="{{isset($user->telefono)?$user->telefono:''}}" name="telefono" placeholder="Telefono"></Input>

        </div>
        <div class="form-group">

            <label for="">Telefono</label>
            <Input class="form-control" value="{{isset($user->telefono2)?$user->telefono2:''}}" name="telefono2" placeholder="Telefono"></Input>

        </div>
        <div class="form-group">

            <label for="">Tipo de Discapacidad</label>
            <Input class="form-control" value="{{isset($user->tipodiscapacidad)?$user->tipodiscapacidad:''}}" name="tipodiscapacidad" placeholder="Tipo De Discapacidad"></Input>


        </div>
        <div class="form-group">

            <label for="">Dirección</label>
            <Input class="form-control" value="{{isset($user->direccion)?$user->direccion:''}}" name="direccion" placeholder="Dirección"></Input>

            
         
        </div>
     
        <div class="form-group">

            <label for="">Experiencia</label>
            <Input class="form-control" value="{{isset($user->experiencia)?$user->experiencia:''}}" name="experiencia" placeholder="Experiencia"></Input>

        </div>
        <div class="form-group">

            <label for="">Educacion</label>
            <Input class="form-control" value="{{isset($user->educacion)?$user->educacion:''}}" name="educacion" placeholder="Educacion"></Input>


        </div>
        <div class="form-group">

            <label for="">Especificación de Educación</label>
            <Input class="form-control" value="{{isset($user->espeedu)?$user->espeedu:''}}" name="espeedu" placeholder="Especificación de Educación"></Input>

        
        </div>
        <div class="form-group">

            <label for="">Habilidades</label>
            <Input class="form-control" value="{{isset($user->habilidades)?$user->habilidades:''}}" name="habilidades" placeholder="Habilidades"></Input>

            
        </div>
        <div class="form-group">

            
            <label for="">Rol</label>
            <Input class="form-control" value="{{isset($user->role)?$user->role:''}}" name="role" placeholder="Rol"></Input>

         
        </div>
        <div class="form-group">
             
            <label for="">Perfil</label>
            <Input class="form-control" value="{{isset($user->perfil)?$user->perfil:''}}" name="perfil" placeholder="Perfil"></Input>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{$valor}}</button>
    </div>
</div>