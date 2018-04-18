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


function fnCalcularGlobal()
{
	
	global $sOperacion,$nNum1,$nNum2;

	static	$nVeces =0;
	$nVeces++;
	




			switch ($sOperacion) {
				case 'Suma':
				# code...

				echo  $nNum1+$nNum2;
				break;

				case 'Resta':
				echo $nNum1-$nNum2;
				break;
				
				case 'Multiplicación':
				echo $nNum1*$nNum2;

				break;
				
				case 'División':
				echo $nNum1/$nNum2;
				break;

				case 'Módulo':
				echo $nNum1%$nNum2;
				break;
			
			default:
				# code...
				break;
		}


}

function fnCalcular($sOperacion,$nNum1,$nNum2)
{
	
		

		switch ($sOperacion) {
				case 'Suma':
				# code...

				echo $nNum1+$nNum2;
				break;

				case 'Resta':
				echo $nNum1-$nNum2;
				break;
				
				case 'Multiplicación':
				echo $nNum1*$nNum2;

				break;
				
				case 'División':
				echo $nNum1/$nNum2;
				break;

				case 'Módulo':
				echo $nNum1%$nNum2;
				break;
			
			default:
				# code...
				break;
		}

				

				


}

?>