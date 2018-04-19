<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v20 Funciones</title>

</head>
<style>
	
	span
	{

		margin-right:  25px
	}
	p
	{
		text-align: center;
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
		width: 200px;
		height: 220px;
		font-weight: 1px 
		font-size: 1px;
		margin:auto;
		text-align: center;



	}

	.cafe
	{

		color: brown !important;
	}
	.espacio
	{
		/*max-height: 1px;*/
		margin:0;
		padding: 0;
	}


</style>


<body>


<h1>Funciones</h1>

<form action="." method="POST">
	<label for="txttl">toLower</label>
	<input type="text" name="txttl" id="">
	<label for="txttu">toUpper</label>
	<input type="text" name="txttu" id="">
	<label for="txttc">toCapital</label>
	<input type="text" name="txttc" id="">
	<button name="btnP">Enviar</button>

</form>


<div class="boxRes"><?php 
	
	include ("fxFunciones.php");
	
	if(isset($_POST["btnP"]))
	{
		
		$sToL =$_POST["txttl"];

		$sToU =$_POST["txttu"];

		$sToC =$_POST["txttc"];

		fnEcho("$sToL ".strtolower(($sToL)));
		
		fnEcho("$sToU ".strtolower(($sToU)));	

		fnEcho("$sToC ".ucfirst(($sToC)));
	
	
	
	}
	
	
	
	
	
	
	
	 ?></div>



	
</body>
</html>