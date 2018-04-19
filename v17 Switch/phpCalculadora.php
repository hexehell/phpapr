<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		
	.boxRes
	{
		
		font-weight: 12px;
		margin: 10px;

		text-align: center;

		color: white;
		background: green;
		border-radius: 2px;
		border-color: green;
		

	}
	div
	{
		width: 150px;
		

		display: inline-block;
	}

	</style>
</head>
<body>

<p><div>El resultado es:</div><div class="boxRes">


	<?php

	require ("fxFunciones.php");
	


	if(isset($_POST["button"]))
	{
			
		$sOperacion=$_POST["operacion"];
		$nNum1 =$_POST["num1"];
		$nNum2 = $_POST["num2"];



		//fnCalcular($sOperacion,$nNum1,$nNum2);
	
		//fnCalcularGlobal();
		fnCalcularGlobal();

		
	}


	

?>
</div></p>
	
</body>
</html>
