create empresas solo es un ejm de crud
<br>
<br>
<br>

<!-- instruccion emblade {{ url('/registroempresa') }} -->
<form action="{{ url('home/registroempresa') }}" method="POST" enctype="multipart/form-data">

    <!-- @csrf imprime una llave de seguridad TOKEN, responde automaticamente al enviar -->
    @csrf
    <!-- incluyendo como recurso la vista form.blade -->
    @include('registroempresa.form')
</form>