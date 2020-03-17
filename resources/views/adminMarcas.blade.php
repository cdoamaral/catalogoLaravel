@extends('layout.plantilla')

	@section('titulo', 'Panel de administracion de marcas')

	@section('h1', 'Panel de administracion de marcas')

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
					<th> Marca </th>
					<th colspan="2">
						<a href="/agregarMarca" class="btn btn-dark"> Agregar </a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($marcas as $marca)
				<tr>
					<td> {{$marca->idMarca}} </td>
					<td> {{$marca->mkNombre}} </td>
					<td>
						<a href="/modificarMarca/{{$marca->idMarca}}" class="btn btn-outline-secondary"> Modificar </a>
					</td>
					<td>
					  	<a href="/eliminarMarca/{{$marca->idMarca}}" class="btn btn-outline-secondary eliminar">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

@endsection