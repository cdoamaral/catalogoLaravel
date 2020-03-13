@extends('layout.plantilla')

	@section('titulo', 'Catalogo de productos')

	@section('h1', 'Catalogo de productos')

	@section('main')

		<div class="list-group m-2">
			<a href="/adminMarcas" class="list-group-item list-group-item-action">
				Panel de administracion de Marcas
			</a>
			<a href="/adminCategorias" class="list-group-item list-group-item-action">
				Panel de administracion de Categorias
			</a>
			<a href="/adminProductos" class="list-group-item list-group-item-action">
				Panel de administracion de Productos
			</a>
			<a href="/adminUsuarios" class="list-group-item list-group-item-action">
				Panel de administracion de Usuarios
			</a>



		</div>

	@endsection