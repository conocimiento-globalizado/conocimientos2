<!doctype html>
<html>
<head>
	<title>Sitio Web</title>
	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
	<meta charset="utf-8">
</head>
<body>
<div class="contenedor">
	<header>
		<h1>Sitio Web</h1>
		<p>Aplicando conocimiento</p>
		<!-- comienza el menu -->
		<?php include "modulos/menu.php"; ?>
		<!-- termina el menu -->
	</header>
	<div class="contenido">
	<!-- como se puede ver se pueden crear paginas con HTML-->
	<h1>Formulario de contacto</h1>
	<p>Por favor ingrese los datos</p>
	<form method="POST" action="enviar.php">
		<p>Nombre</p>
		<input type="text" name="nombre">
		<p>Email</p>
		<input type="text" name="email">
		<p>Mensaje</p>
		<textarea name="mensaje"></textarea>
		<br>
 		<input type="submit" value="Enviar">		
	</form>
	</div><!-- fin contenido-->

	<footer>
		<div class="separador"></div>
		<p>Copyright 2014</p>
	</footer>
</div><!--contenedor-->
</body>
</html>