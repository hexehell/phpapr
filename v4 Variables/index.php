<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v4</title>
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

print "<p>Tu mama esta pelona</p>";


print "<p>tu mama tambien</p>";


$nombre = "jefatu";

$enunciado = "";

print "<p>tu mama se llama ". $nombre."</p>";

print "<p>tu mama se llama $nombre</p>"; // comillas dobles las variables se pone el valor

print '<p>tu mama se llama $nombre</p>';// comillas simples las variables se pone el nombre

echo "<p>tu mama se llama $nombre</p>",$enunciado;// con echo se puede imprimir en variables y con print no

print $enunciado;

?>

	
</body>
</html>