@extends('layout.plantilla')

	@section('titulo', 'Panel de administracion de categorias')

	@section('h1', 'Panel de administracion de categorias')

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
					<th> Categoria </th>
					<th colspan="2">
						<a href="/agregarCategoria" class="btn btn-dark"> Agregar </a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categorias as $categoria)
				<tr>
					<td> {{$categoria->idCategoria}} </td>
					<td> {{$categoria->catNombre}} </td>
					<td>
						<a href="/modificarCategoria/{{$categoria->idCategoria}}" class="btn btn-outline-secondary"> Modificar </a>
					</td>
					<td>
					  	<a href="/eliminarCategoria/{{$categoria->idCategoria}}" class="btn btn-outline-secondary eliminar">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

@endsection