<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v12 Operadores matematicos II</title>

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



<h1>Operadores matematicos III</h1>

<form name="form1" method="post" action="phpCalculadora.php">
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
      <option>Incremento</option>
      <option>Decremento</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>






	
</body>
</html>