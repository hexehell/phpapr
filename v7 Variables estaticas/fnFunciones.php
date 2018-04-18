<?php  

function fnAumentaNumero()
{
	static $numero=0; // el operador static funciona para poder acceder a una variable estatica, static tambien evita que la declaracion se corra mas de una vez y asi solo se puede mandar a llamar varias inicializaciones

	$numero++;

	echo "<p>". $numero. "</p>";

}

?>