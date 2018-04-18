<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v5 flujo de control</title>
</head>
<body>


<!-- <form method="POST" action="index.php"> -->
<!--  -->
	<!-- User Name: <input type="text" name="user_name" /> -->
	<!-- Location: <input type="text" name="user_location" /> -->
	<!-- <input type="submit" value="Send My Info" /> -->
<!--  -->
<!-- </form> -->



<?php

include ("fnFunciones.php"); // include no detiene el flujo del programa si el archivo no es encontrado
require ("fnFunciones1.php"); // require detiene el flujo del programa si el archivo no es encontrado

print "<p>Tu mama esta pelona</p>";



fnEscribeTxt();
fnEscribeTxt();
fnEscribeTxt();
fnEscribeTxt();



print "<p>tu mama tambien</p>";



?>

	
</body>
</html>