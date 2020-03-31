@extends('layout.plantilla')

	@section('titulo', 'Alta de una nueva marca')

	@section('h1', 'Alta de una nueva marca')

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

@if (session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

		<div class="alert bg-light p-3">

			<form action="/agregarMarca" method="post" >

			@csrf
			<input type="text" name="mkNombre" class="form-control">
			<br>
			<button class="btn btn-dark">Agregar marca</button>
			<a href="/adminMarcas" class="btn btn-outline-secondary">Volver a panel</a>
			</form>
		</div>


	@endsection