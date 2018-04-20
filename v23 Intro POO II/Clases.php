<?php 
require ("fxFunciones.php");
class ClsPersona
{

	var $sNombre;
	var $sNivelLocura;



	function ClsPersona($psNombre)
	{

		$this->sNombre = $psNombre;

		$this->sNivelLocura = 0;

	}

	function fnHablar()
	{
		echo "dire tonterias";
	}

	function fnDormir()
	{

	}

	function fnComer()
	{

	}

	function fnCojer()
	{

	}

	function fnDimeLocura()
	{

		fnEcho("La locura es ". $this->sNivelLocura);
	}

}



 ?>
	



