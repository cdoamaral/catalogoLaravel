@extends('layout.plantilla')

	@section('titulo', 'Panel de administracion de usuarios')

	@section('h1', 'Panel de administracion de usuarios')

	@section('main')

		@if (session('mensaje'))
	    <div class="alert alert-success">
	        {{ session('mensaje') }}
	    </div>
		@endif

		<table class="table table-bordered table-striped table-hover">
			
			<thead class="thead-dark">
				
				<tr>
					<th> id	</th>
					<th> usuNombre </th>
					<th> usuApellido </th>
					<th> usuEmail </th>
					<th> usuPass </th>
					<th colspan="2">
						<a href="/agregarUsuario" class="btn btn-dark"> Agregar </a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($usuarios as $usuario)
				<tr>
					<td> {{$usuario->idUsuario}} </td>
					<td> {{$usuario->usuNombre}} </td>
					<td> {{$usuario->usuApellido}} </td>
					<td> {{$usuario->usuEmail}} </td>
					<td> {{$usuario->usuPass}} </td>
					<td>
						<a href="/modificarUsuario/{{$usuario->idUsuario}}" class="btn btn-outline-secondary"> Modificar </a>
					</td>
					<td>
					  	<a href="/eliminarUsuario/{{$usuario->idUsuario}}" class="btn btn-outline-secondary eliminar">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

@endsection