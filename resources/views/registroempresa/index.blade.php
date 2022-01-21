@extends('layouts.app')

@section('content')
aca listamos a los postulantes
<a href="{{url('home/registroempresa/create')}}">Nuevo registro</a>
<table class="">
    <thead>
        <tr>

            <th>#</th>
            <th>codigoempresaaaaa</th>
            <th>nombreempresa</th>
            <th>ruc</th>
            <th>telefono</th>
            <th>correo</th>
            <th>direccion</th>
            <th>distrito</th>
            <th>acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $registroempresasss as $indice )
        <tr>
            <td>{{ $indice->id }}</td>
            <td>{{ $indice->codigoempresa }}</td>
            <td>{{ $indice->nombreempresa }}</td>
            <td>{{ $indice->ruc }}</td>
            <td>{{ $indice->telefono }}</td>
            <td>{{ $indice->correo }}</td>
            <td>{{ $indice->direccion }}</td>
            <td>{{ $indice->distrito }}</td>
            <td>
                <a type="submit" href="{{ url('home/registroempresa/'.$indice->id.'/edit')}}">editar</a>
                <form action="{{ url('/registroempresa/'.$indice->id)}}" method="POST">
                    @csrf
                    <!-- para convertir el metodo POST a DELETE -->
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('borrar?')" value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection