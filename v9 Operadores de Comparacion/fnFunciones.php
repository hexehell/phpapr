<?php  

function fnAumentaNumero()
{
	static $numero=0;

	$numero++;

	echo "<p>". $numero. "</p>";

}

function  fnImprimeEjercicio($var1, $var2)
{

	echo "<p><span>var1->".gettype($var1)."</span><span>$var1</span><span>".($var1==$var2)."</span></p>
			<p><span>var2->".gettype($var2)."</span><span>$var2</span><span>".($var1===$var2)."</span></p>"; // el operador === compara igualdad de valor y de tipo de dato

}

?>