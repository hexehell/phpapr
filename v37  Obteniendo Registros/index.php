<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>37 Obteniendo Registros</title>
</head>
<body>

	<?php 

	include ("fxFunciones.php");

	$sHost = "localhost";
	$sDBnombre = "phpapra";
	$sUsuario = "root";
	$sContraseña = "root";

	
	$scon = mysqli_connect($sHost,$sUsuario,$sContraseña);

	if(mysqli_connect_errno())
	{

		fnEcho("No jalo");
		exit();
	}

	mysqli_set_charset($scon, "utf8");

	mysqli_select_db($scon,$sDBnombre) or die("la base de datos: $sDBnombre, no existe");

	$sQuery = "select * from tbl_ses_usuarios";

	$res= mysqli_query($scon,$sQuery);

	$row =mysqli_fetch_row($res);

	foreach ($row  as $value) {
		fnEcho($value);
	}


	 ?>
	
</body>
</html>