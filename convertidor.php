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
	<!--
	Datos para desarollar la conversión importantes
		1 kg= 2,2 libras
		1 libra= 0,454 kg
	-->
	<h1>Convertidor</h1>
	<form method="GET">
		<p>Digite el valor</p>
		<input type="text" name="valor">
		<select name="conversion">
			<option value="1">Kilos a Libras</option>
			<option value="2">Libras a Kilos</option>
		</select>
		<br>
		<input type="submit" value="Convertir">
	</form>
	<h2>Resultado</h2>
	<?php
		// valida
		if (isset($_GET['valor']) && isset($_GET['conversion'])) {
			$valor=$_GET['valor'];
			$conversion=$_GET['conversion'];
				
			if ($conversion == 1) {
				$resultado= $valor * 2.2;
				echo "Son ".$resultado." Libras";
			}elseif ($conversion ==2) {
				//convertir libras a kilos
				$resultado= $valor * 0.454;
				echo "Son ".$resultado." kilos";
			}else{
				echo "no se puede realizar ningun a accion";
			}
		}else{

			echo "No se ha ingresado ningun valor";
		} 
	?>
	</div><!-- fin contenido-->

	<footer>
		<div class="separador"></div>
		<p>Copyright 2014</p>
	</footer>
</div><!--contenedor-->
</body>
</html>