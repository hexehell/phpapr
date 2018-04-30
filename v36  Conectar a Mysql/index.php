<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>36 Arrays</title>
</head>
<body>

	<?php 

	include ("fxFunciones.php");

	$sHost = "localhost";
	$sDBnombre = "phpapr";
	$sUsuario = "root";
	$sContraseña = "root";

	
	$scon = mysqli_connect($sHost,$sUsuario,$sContraseña,$sDBnombre);

	$sQuery = "select * from tbl_ses_usuarios";

	$res= mysqli_query($scon,$sQuery);

	$row =mysqli_fetch_row($res);

	foreach ($row  as $value) {
		fnEcho($value);
	}


	 ?>
	
</body>
</html>