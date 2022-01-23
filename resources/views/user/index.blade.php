@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
   

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">

                                    <input type="text" class="form-control" placeholder="Buscar...">
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
                        </div>
                    </div>
                </div>
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
