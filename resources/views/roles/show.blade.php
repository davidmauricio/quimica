@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Productos
                 </div>
                 
                 <div class="panel-body">
                      <p><strong>ID ->   </strong>{{ $role->id }}</p>
                      <p><strong>Slug ->   </strong>{{ $role->slug }}</p>
                      <p><strong>Nombre->  </strong>{{ $role->name }}</p>
                </div>

            </div>

         </div>
     </div>
  </div>
@endsection