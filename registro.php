<?php

	$servidor = "localhost";
	$usuario = "root";
	$clave = "";
	$baseDeDatos = "ejemplo";

	$enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beeshop Registro </title>
	<link rel="stylesheet" type="text/css" href="estilos/style.css">
	<link rel="stylesheet" type="text/css" href="estilos/registro.css?1.1">
</head>
<body>

	<header class="header">
		<div class="div-header">
			<h1 class="Titulo_paginaWeb">Beeshop</h1>
			<nav>
				<ul>
					<li><a class="nav-bar" href="index.html">Inicio</a></li>
					<li><a class="nav-bar" href="productos.html">Productos</a></li>
					<li><a class="nav-bar" href="recetas.html">Recetas</a></li>
					<li><a class="nav-bar" href="#">Sobre nosotros</a></li>
				</ul>
			</nav>
		</div>	
		<a class="registro" href="http://localhost/ejemplo/registro.php">Registrate</a>
	</header>
	<main>
		<div class="contenedor-formulario">
			<form action="#" name="ejemplo" method="post">
				<label class="registrate">Registrate</label>
				
				
				<div class="div-input">
					<label>nombre completo</label>
					<input type="text" name="nombre" >
				</div>
				<div class="div-input">
					<label>correo</label>
					<input type="email" name="correo" >
				</div>				
				<div class="div-input">
					<label for="nombre">telefono</label>
					<input type="tel" name="telefono" >
				</div >
				<input type="submit" name="registro" class="enviar">
			</form>
		</div>
	</main>


</body>
</html>

<?php
	if(isset($_POST['registro'])){
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		

		$insertarDatos = "INSERT INTO usuarios VALUE('$nombre','$correo','$telefono','')" ;

		$ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
	}
?>