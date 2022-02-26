@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
   







                            
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <form class="d-flex" action="{{route('usuarios.index')}}" method="GET">
        <input class="" style="width : 300px; heigth : 100px"  name="texto" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success btn-lg"  type="submit">Buscar</button>
   
      </form>
    </div>
  </nav>





                            

                            <table class="table table-striped table-hover">
                                <thead class="thead">

                                

                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre y Apellidos </th>
										<th>Email</th>
                                        <th>Rol</th>
										<th>Dni</th>
										<th>Apellidos</th>
										<th>Telefono</th>
                                        
										<th>Tipodiscapacidad</th>
										<th>Direccion</th>
									
										
								
										<th>Educacion</th>
										<th>Carrera</th>
                                        <th>Fecha de creación </th>
								        <th>Fecha de Modificación</th>
									

                                        <th>Visualiza Curriculum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $user->name }}  {{ $user->apellidos }}</td>
											<td>{{ $user->email }}</td>
                                           <td>{{ $user->role }}</td>
											<td>{{ $user->dni }}</td>
											<td>{{ $user->apellidos }}</td>
											<td>{{ $user->telefono }}</td>
										
											<td>{{ $user->tipodiscapacidad }}</td>
											<td>{{ $user->direccion }}</td>
										
										
											
											<td>{{ $user->educacion }}</td>
											<td>{{ $user->espeedu }}</td>
                                            <td>{{ $user->created_at }}</td>
											<td>{{ $user->updated_at }}</td>
											

                                            <td><a href="{{url('vizualizar', $user->id)}}" class="btn btn-warning">Visualizar</a></td>

                                           
                                        <td> <a class="btn btn-sm btn-success" href="{{ route('usuarios.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a></td>
                                        </tr>
    

                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links()}}
            
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>



@endsection
