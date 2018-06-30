extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Asignatura
                 </div>
                 
                 <div class="panel-body">
                      {!! Form::open(['route'=>'asignatura.store']) !!}


                        @include('asignaturas.partials.form')
                      

                       {!! Form::close() !!}
                </div>
              </div>

            </div>

         </div>
     </div>
@endsection