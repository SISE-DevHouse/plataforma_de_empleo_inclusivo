@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
   

                    <div class="card-body">
                        <div class="table-responsive">




<form action="{{route('usuarios.index')}}" method="GET">
                                <div class="form-row">
                                    <div class="col-sm-4">
        <input type="text" class="form-control" id="texto" name="texto" value="{{isset($value)}}" placeholder="Ingrese nombre">
                                    </div>
                                    <div class="col-auto">
                                        <input type="submit" value="BUSCAR" class="btn btn-primary">
                                    </div>
                                </div>

                            </form>




                            

                            <table class="table table-striped table-hover">
                                <thead class="thead">

                                

                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Dni</th>
										<th>Apellidos</th>
										<th>Telefono</th>
										<th>Telefono2</th>
										<th>Tipodiscapacidad</th>
										<th>Direccion</th>
									
										
								
										<th>Educacion</th>
										<th>Espeedu</th>
								
									

                                        <th>Visualiza Curriculum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->dni }}</td>
											<td>{{ $user->apellidos }}</td>
											<td>{{ $user->telefono }}</td>
											<td>{{ $user->telefono2 }}</td>
											<td>{{ $user->tipodiscapacidad }}</td>
											<td>{{ $user->direccion }}</td>
										
										
											
											<td>{{ $user->educacion }}</td>
											<td>{{ $user->espeedu }}</td>
											
											

                                            <td><a href="{{url('vizualizar', $user->id)}}" class="btn btn-warning">Visualizar</a></td>
                                           
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
