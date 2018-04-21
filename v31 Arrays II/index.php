<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>30 Arrays</title>
</head>
<body>

	<?php 

	include ("fxFunciones.php");

	 fnEcho("sintaxis estilo vector, \$arr[]=\"valor\"");

	
	$arr []= "pancho";
	$arr []= "poncho";
	$arr []= "pincho";
	$arr []= "puncho";

	for($i =0;$i<count($arr);$i++)
		fnEcho($i." ".$arr[$i]);


	fnEcho("sintaxis estilo lineal, \$arr=array(\"a\",\"b\",\"c\")");

	$arr1 = array("chango","chengue", "chingui");

		for($i =0;$i<count($arr1);$i++)
		fnEcho($i." ".$arr1[$i]);

	fnEcho("sintaxis estilo asociativo, \$arr=array(\"llave\"=>\"valor\",\"llave2\"=>\"valor2\")");

	$arr2 = array("chango"=>"yo","chengue"=>"ye", "chingui"=>"yi");

		foreach ($arr2 as $llave => $valor) {
			fnEcho("$llave $valor");
		}

	fnEcho("ordenar con sort() array arr2");

	sort($arr2);


		foreach ($arr2 as $llave => $valor) {
			fnEcho("$llave $valor");
		}


	$noArr = "no es un array";

	if(is_array($arr))
		fnEcho("\$arr es un array");


	if(!is_array($noArr))
		fnEcho("\$noArr no es un array");


	 ?>
	
</body>
</html>