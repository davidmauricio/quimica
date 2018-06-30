@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   Usuarios

                 </div>
                 
                <div class="panel-body">
                  
                   <table class="table  table-striped table hover">
                    <thead>
                        <tr>
                            <th width="18px">ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Permisos</th>

                        </tr>

                    </thead>
                    <tbody>
                        @foreach($users as $user) 
                        <tr>
                            <td>{{ $user->id    }}</td>
                            <td>{{ $user->name  }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @can('users.show')
                                <a href="{{ route ('users.show', $user->id) }}" class="btn btn-sm btn-info"> Ver</a> 
                                @endcan
                                @can('users.edit')
                                <a href="{{ route ('users.edit', $user->id) }}" class="btn btn-sm btn-success"> Editar</a> 
                                @endcan                                  

                            </td>

                            
                        </tr>

                         <td>
                                @can('users.destroy')
                                    {!! Form::open(['route'=> ['users.destroy', $user->id], 'method'=>'DELETE']) !!}

                                    <button class ="btn btn-sm btn-danger ">
                                        Eliminar

                                    </button>


                                    {!! Form::close() !!}

                                @endcan


                        </td>                          

                        </tr>

                         

                           

            
                            
                        @endforeach
            
                         </tbody>
                    </table>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
