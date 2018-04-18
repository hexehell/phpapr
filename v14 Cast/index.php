<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v14 CAST</title>

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
	.boxRes
	{
		width: 150px;
		height: 150px;
		font-weight: 12px;
		margin: 10px;
		

	}
</style>


<body>

<p class=""></p>

<h1>CAST</h1>

<?php 

include("fxFunciones.php");

	$num1 = pow(5, 3);

	$num2 = rand();

	$num3 = round(75.23121,2);

	fnEcho("Variable tipo ".gettype($num1));

	fnEcho($num1);


	fnEcho("Variable tipo ".gettype($num2));

	fnEcho($num2);

	fnEcho("Variable tipo ".gettype($num3));

	fnEcho($num3);

	$num4 = 1;


	fnEcho("E aqui la mamada de php, lenguaje debilmente tipado: ");


	fnEcho("\$num4 = 1;".gettype($num4));

	fnEcho("Valor ".$num4);

	$num4+= 0.5;

	fnEcho("\$num4+= 0.5;".gettype($num4));

	fnEcho("Valor ".$num4);

	$num4.=  "cadena poderosisima";

	fnEcho("\$num4.= ' cadena poderosisima';".gettype($num4));

	fnEcho("Valor ".$num4);

 ?>





	
</body>
</html>