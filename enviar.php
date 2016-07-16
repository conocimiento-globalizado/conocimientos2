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
	<?php
		// configurando Formulario
	$nombre= $_POST['nombre'];
	$email= $_POST['email'];
	$mensaje= $_POST['mensaje'];
	$contenido="El usuario $nombre del email $email envio el contenido<br> $mensaje";
	mail("info@nuestrositio.com", "Mensaje desde la web", $contenido);
	echo "Mensaje Enviado";
	?>
	</div><!-- fin contenido-->

	<footer>
		<div class="separador"></div>
		<p>Copyright 2014</p>
	</footer>
</div><!--contenedor-->
</body>
</html>