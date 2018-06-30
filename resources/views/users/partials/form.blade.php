<div class="form-group">
	
	{{ Form::label('name', 'Nombre') }}

	{{ Form::text('name', null,['class'=>'form-control']) }}

</div>
<div class="form-group">
	
	{{ Form::label('email', 'Correo Electrónico') }}

	{{ Form::text('email', null,['class'=>'form-control']) }}

</div>
<hr>
<h3>Lista de Roles</h3>
<div class="form-group">
<ul class="list-unstyled">
	@foreach($roles as $role)
	<li>
		




		{{ Form::checkbox('roles[]',$role->id,null) }}
		{{ $role->name }}
		<em>({{ $role->description ?: 'N/A' }})</em>

	</li>

	@endforeach

</ul>

</div>

<div class="form-group">
	
	{{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) }}


</div>