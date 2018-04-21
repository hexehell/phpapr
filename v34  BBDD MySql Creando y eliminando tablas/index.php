<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>30 Arrays</title>
</head>
<body>

	<?php 

	include ("fxFunciones.php");

	 $arrTareas_Personas = array(    'Hector' => array('traer soda' , 'traer pastel', 'procurar a la mama del niño' )
	 							  , 'Argelia' => array('coordinar'  ,'ser un Angel', 'ocuparse de los disfraces', 'ser hermosa' )
	 							  , 'Corazon' => array('coordinar', 'ser hermosa', 'parecerse a vanessa' , 'coordinar el evento' ) );

	 fnEcho("Tareas para el evento del dia del niño");

	 foreach ($arrTareas_Personas as $sNombre => $arrTareas)
	 {
	 	fnEcho("Las tareas de $sNombre son: ");

	 	foreach ($arrTareas as  $sTarea) {
	 		
	 		fnEcho("	-$sTarea");
	 	}


	 	fnEcho("");
	 }



	 fnEcho(var_dump($arrTareas_Personas));


	 ?>
	
</body>
</html>