<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v8 Cadenas</title>

	<style>
		 .rojo
		 {
		 	color:red;
		 	font-weight: bold;
		 }

		 .verde
		 {

		 	color:green;
		 	font-weight: bold;

		 }
	</style>
</head>


<body>





<?php

$colorTxt = "rojo";

echo "<p class='$colorTxt'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat dolorem ullam excepturi, molestiae dolore aliquam, quo amet quasi necessitatibus iure, numquam nostrum inventore provident corporis? Inventore nihil dolore, dolor omnis.
</p>";

$str1 ="Argelia";

$str2 = "ARGELIA";

echo "<p>". strcmp($str1, $str2)."</p>";

echo "<p>". strcasecmp($str1, $str2)."</p>";


?>

	
</body>
</html>