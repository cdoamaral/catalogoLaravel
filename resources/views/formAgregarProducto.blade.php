@extends('layout.plantilla')

	@section('titulo', 'Alta de un nuevo producto')

	@section('h1', 'Alta de un nuevo producto')

	@section('main')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

		<div class="alert bg-light p-3">	

<form action="/agregarProducto" method="post" enctype="multipart/form-data">
	@csrf
	Nombre: 
	<br>
	<input type="text" name="prdNombre" class="form-control"  value="{{ old('prdNombre') }}">
	<br>

Precio: <br>
<div class="input-group mb-2">
<div class="input-group-prepend">
<div class="input-group-text">$</div>
</div>
<input type="number" name="prdPrecio" class="form-control" value="{{ old('prdPrecio') }}">
</div>
<br>
Marca: <br>
<select name="idMarca" class="form-control" required>

	<option value="">Seleccione una marca</option>

	@foreach( $marcas as $marca )
	<option value="{{ $marca->idMarca }}">{{ $marca->mkNombre }}</option>
	@endforeach

</select>
<br>
Categoría: <br>
<select name="idCategoria" class="form-control" required>

<option value="">Seleccione una Categoría</option>

	@foreach( $categorias as $categoria )
	<option value="{{ $categoria->idCategoria }}">{{ $categoria->catNombre }}</option>
	@endforeach

</select>
<br>
Presentacion: <br>
<textarea name="prdPresentacion" class="form-control">{{ old('prdPresentacion') }}</textarea>
<br>
Stock: <br>
<input type="number" name="prdStock" class="form-control" min="0" value="{{ old('prdStock') }}">
<br>
Imagen: <br>
<input type="file" name="prdImagen" class="form-control">
<br>
<input type="submit" value="Agregar Producto" class="btn btn-secondary mb-3">
<a href="/adminProductos" class="btn btn-light mb-3">Volver al panel de Productos</a>

</form>




		</div>

	@endsection