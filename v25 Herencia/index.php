<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v24 Intro POO III</title>
</head>
<body>

	<?php 

	include ("Clases.php");

	$hexehell = new ClsPersona("hablar");
	$hexehell->fnHablar();
	$hexehell->fnSetLocura(25);
	$hexehell->fnDimeLocura();

	$sombra= new ClsEnte("EnteSombra");
	$sombra->fnHablar();
	$sombra->fnSetArrogancia(50);
	$sombra->fnDimeArrogancia();


	 ?>
	
</body>
</html>