@extends('layout.plantilla')

	@section('titulo', 'Panel de administracion de productos')

	@section('h1', 'Panel de administracion de productos')

	@section('main')

		@if (session('mensaje'))
	    <div class="alert alert-success">
	        {{ session('mensaje') }}
	    </div>
		@endif

		<table class="table table-bordered table-striped table-hover">
			
			<thead class="thead-dark">
				
				<tr>
					<th> Producto </th>
					<th> Marca </th>
					<th> Categoria </th>
					<th> Precio </th>
					<th> Presentacion </th>
					<th> Stock </th>
					<th> Imagen </th>
					<th colspan="2">
						<a href="/agregarProducto" class="btn btn-dark"> Agregar </a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
				<tr>
					<td> {{$producto->prdNombre}} </td>
					<!-- Se pone getMarca porque es el metodo de relacion -->
					<td> {{$producto->getMarca->mkNombre}} </td>
					<td> {{$producto->getCategoria->catNombre}} </td>
					<td> {{$producto->prdPrecio}} </td>
					<td> {{$producto->prdPresentacion}} </td>
					<td> {{$producto->prdStock}} </td>
					<td> <img src="productos/{{$producto->prdImagen}}" class="img-thumbnail"> </td>
					<td>
						<a href="/modificarProducto/{{ $producto -> idProducto }}" class="btn btn-outline-secondary"> Modificar </a>
					</td>
					<td>
					  	<a href="/eliminarProducto/{{$producto->idProducto}}" class="btn btn-outline-secondary eliminar">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	
@endsection