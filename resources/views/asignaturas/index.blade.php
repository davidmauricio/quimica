@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <h3><b>Asignaturas</b></h3>
                   @can('asignatura.create') 
                   <a href="{{ route('asignatura.create') }}" class="btn btn-primary pull-right">
                        crear

                   </a>
                    @endcan

                 
                <div class="panel-body">
                  
                   <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th> 
      <!--     <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> -->
                            </th>
                            <th></th>
                        </tr>
                        <tr class="success">
                            <th width="18px">ID</th>
                            <th>Nombre</th>
                            <th>Código</th>
                            <th>Permisos</th>

                        </tr>

                    </thead>
                    <tbody>
                        @foreach($asignaturas as $asignatura) 
                        <tr>
                            <td>{{ $asignatura->id}}</td>
                            <td>{{ $asignatura->nombre}}</td>
                            <td>{{ $asignatura->codigo}}</td>

                            
                            <td>
                                @can('asignatura.show')
                                <a href="{{ route ('asignatura.show', $asignatura->id) }}" class="btn btn-sm btn-info"> Ver</a> 
                                @endcan
                                @can('asignatura.edit')
                                <a href="{{ route ('asignatura.edit', $asignatura->id) }}" class="btn btn-sm btn-success"> Editar</a> 
                                @endcan

                            </td>
                            <td>
                                @can('asignatura.destroy')
                                    {!! Form::open(['route'=> ['asignatura.destroy', $asignatura->id], 'method'=>'DELETE']) !!}

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
