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
                      <p><strong>Nombre ->   </strong>{{ $user->name }}</p>
                      <p><strong>email ->  </strong>{{ $user->email }}</p>

                </div>

            </div>

         </div>
     </div>
  </div>
@endsection