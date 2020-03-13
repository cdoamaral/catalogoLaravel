<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listar categorias</title>
</head>
<body>
<h1>Listar categorias</h1>

	<ul>
	@foreach($categorias as $categoria)
		<li> {{$categoria->catNombre}}</li>
	@endforeach	
	</ul>
	
</body>
</html>