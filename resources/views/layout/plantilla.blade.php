<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('titulo')</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/sweetalert2.css">
	<link rel="stylesheet" href="/css/estilos.css">
  <script src="/js/sweetalert2.js"></script>

  
</head>
<body class="d-flex flex-column h-100">

	

 <header>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <!-- en # de href se crea una peticion -->
          <a class="nav-link" href="/adminMarcas">Admin marcas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/adminCategorias">Admin categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/adminProductos">Admin productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/adminUsuarios">Admin usuarios</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<main class="container flex-shrink-0">
	
	<h1>@yield('h1')</h1>

	@yield('main')

</main>

<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>
	
</body>
</html>