<label for="">codigoempresa</label>
<!-- el campo name tiene que ser igual al canpo de la BD -->
<!-- value="{{isset($datos->codigoempresa)?$datos->codigoempresa:''}}"
    es para ver si se existe datos, si no hay se definira como '' -->
<input type="text" name="codigoempresa" value="{{isset($datos->codigoempresa)?$datos->codigoempresa:''}}" id="txtcodigoempresa">
<br>
<label for="">nombreempresa</label>
<input type="text" name="nombreempresa" value="{{isset($datos->nombreempresa)?$datos->nombreempresa:''}}" id="txtnombreempresa">
<br>
<label for="">ruc</label>
<input type="text" name="ruc" value="{{isset($datos->ruc)?$datos->ruc:''}}" id="txtruc">
<br>
<label for="">telefono</label>
<input type="text" name="telefono" value="{{isset($datos->telefono)?$datos->telefono:''}}" id="txttelefono">
<br>
<label for="">correo</label>
<input type="text" name="correo" value="{{isset($datos->correo)?$datos->correo:''}}" id="txtcorreo">
<br>
<label for="">direccion</label>
<input type="text" name="direccion" value="{{isset($datos->direccion)?$datos->direccion:''}}" id="txtdireccion">
<br>
<label for="">distrito</label>
<input type="text" name="distrito" value="{{isset($datos->distrito)?$datos->distrito:''}}" id="txtdistrito">
<br>
<button>enviar</button>
<br>
<br>
<a href="{{url('registroempresa')}}">regresar</a>