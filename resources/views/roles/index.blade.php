@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   Roles
                   @can('roles.create') 
                   <a href="{{ route('roles.create') }}" class="btn btn-primary pull-right">
                        crear

                   </a>
                    @endcan
                 </div>
                 
                <div class="panel-body">
                  
                   <table class="table  table-striped table hover">
                    <thead>
                        <tr>
                            <th width="18px">ID</th>
                            <th>Nombre</th>
 

                        </tr>

                    </thead>
                    <tbody>
                        @foreach($roles as $role) 
                        <tr>
                            <td>{{ $role->id}}</td>
                            <td>{{ $role->name}}</td>
                    

                            
                            <td>
                                @can('roles.show')
                                <a href="{{ route ('roles.show', $role->id) }}" class="btn btn-sm btn-info"> Ver</a> 
                                @endcan
                                @can('roles.edit')
                                <a href="{{ route ('roles.edit', $role->id) }}" class="btn btn-sm btn-success"> Editar</a> 
                                @endcan

                            </td>
                            <td>
                                @can('role.destroy')
                                    {!! Form::open(['route'=> ['roles.destroy', $role->id], 'method'=>'DELETE']) !!}

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
