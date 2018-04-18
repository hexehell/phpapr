<?php  

function fnAumentaNumero()
{
	static $numero=0;

	$numero++;

	echo "<p>". $numero. "</p>";

}

?>