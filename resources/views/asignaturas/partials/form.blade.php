<div class="form-group">
	
	{{ Form::label('nombre', 'Nombre de la asignatura') }}

	{{ Form::text('nombre', null,['class'=>'form-control']) }}

</div>

<div class="form-group">
	
	{{ Form::label('codigo', 'Codigo de la asignatura')}}

	{{ Form::text('codigo', null,['class'=>'form-control']) }}


</div>



<div class="form-group">
	
	{{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) }}


</div>