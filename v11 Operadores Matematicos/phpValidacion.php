<?php 

if (isset($_POST["enviando"]))
{
	$usuario = $_POST["nombre_usuario"];
	$edad =  $_POST["edad_usuario"];

	if($usuario=="hexehell" && $edad>=18)
	{

		echo "<p class='validado'>hola $usuario</p>";
	}
	else
	{

		echo "<p class='no_validado'>quien eres tu?, tas muy huerco</p>";
	}


	
}


 ?>