<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v10 Constantes</title>

</head>
<style>
	
	span
	{

		margin-right:  25px
	}

		h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
		text-align: center;
		
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
		text-align: center;
	}
</style>


<body>



<h1>constantes</h1>



<?php

define("COLOR","#990000"); // existe un parametro que permite hacer la constante caso insensible

ECHO COLOR;

echo "<p>mira cosa util en las constantes , numero de linea: ". __LINE__." </p>";

include ("fnFunciones.php");

?>



	
</body>
</html>