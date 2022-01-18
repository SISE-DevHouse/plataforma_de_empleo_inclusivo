edit empresas
<!-- enctype para la imagen solo si se usara mas adelante-->
<form action="{{url('/registroempresa/'.$datos->id)}}" method="POST" enctype="multipart/form-data">
    <!-- @csrf para que permita modificar??  -->
    @csrf
    {{ method_field('PATCH')}}


    @include('registroempresa.form')
</form>