<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v27 Modificadores de acceso II</title>
</head>
<body>

	<?php 

	include ("Clases.php");

	Compra_vehiculo::fnSetAyuda(4500);
	
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");
	
	echo $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_vehiculo("compacto");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");

	Compra_vehiculo::fnSetAyuda(4500);
	
	echo $compra_Ana->precio_final();
	
	
	
	
	 ?>
	
</body>
</html>