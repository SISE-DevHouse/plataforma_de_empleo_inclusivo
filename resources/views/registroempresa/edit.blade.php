edit empresas solo es un ejm de crud
<!-- enctype para la imagen solo si se usara mas adelante-->
<form action="{{url('home/registroempresa/'.$datos->id)}}" method="POST" enctype="multipart/form-data">
    <!-- @csrf para que permita modificar??  -->
    @csrf
    {{ method_field('PATCH')}}


    @include('registroempresa.form')
</form>