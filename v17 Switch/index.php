<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v16 	Condicionales II</title>

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
		margin:auto;
		

	}
</style>


<body>

<p class=""></p>

<h1>Condicionales II</h1>


<form action="index.php" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>


<div class="boxRes validado">
<?php 

include("fxFunciones.php");

if(isset($_POST["enviando"]))
{
	$edad=$_POST["edad_usuario"];
	$sNombre=$_POST["nombre_usuario"];

	// if($sNombre =="Salomon")
	// {
	// 	echo "No salomon del rio, no puedes pasar ";

	// }else

	// if($edad <=14)
	// {
	// 	echo "No $sNombre del rio, no puedes pasar ";


	// }

	switch (true) {
		case $edad<=14 && $sNombre=="Salomon":
			echo "No salomon del rio, no puedes pasar ";
			break;
		
		case $edad>14 && $sNombre=="Salomon":
			echo "No salomon del rio, no puedes pasar ni aunque mientas tu edad ";
			break;


		case $edad>14 && $edad<21:
			echo "No sNombre , no puedes pasar ";
		break;

		case $edad>21 :
			echo "Puede usted $sNombre  pasar ";
		break;

		default:
			# code...
			break;
	}

	// echo $sNombre == "Salomon"? "No salomon del rio, no puedes pasar ":$edad <=14?"No $sNombre del rio, no puedes pasar ":"Pasa $sNombre son bienvenidos tus guerreros";


}



 ?>
</div>




	
</body>
</html>