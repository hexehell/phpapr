<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v11 Operadores matematicos I</title>

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



<h1>Operadores matematicos</h1>

<form name="form1" method="post" action="index.php">
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>

<p><span>El resultado es:</span><span>

<?php
	
	if(isset($_POST["button"]))
	{
		$num1 =$_POST["num1"];
		$num2 = $_POST["num2"];

		$operacion=$_POST["operacion"];

		switch ($operacion) {
				case 'Suma':
				# code...

				echo $num1+$num2;
				break;

				case 'Resta':
				echo $num1-$num2;
				break;
				
				case 'Multiplicación':
				echo $num1*$num2;

				break;
				
				case 'División':
				echo $num1/$num2;
				break;

				case 'Módulo':
				echo $num1%$num2;
				break;
			
			default:
				# code...
				break;
		}

	

	}

?>

</span></p>

	
</body>
</html>