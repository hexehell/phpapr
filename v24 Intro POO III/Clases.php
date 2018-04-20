<?php 
require ("fxFunciones.php");
class ClsPersona
{

	var $sNombre;
	var $nNivelLocura;



	function ClsPersona($psNombre)
	{

		$this->sNombre = $psNombre;

		$this->nNivelLocura = 0;

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

		fnEcho("La locura es ". $this->nNivelLocura);
	}


	function fnSetLocura($nlocura)
	{
		$this->nNivelLocura = $nlocura;

	}

}


class ClsEnte
{

	var $sNombre;
	var $nNivelArrogancia;



	function ClsEnte($psNombre)
	{

		$this->sNombre = $psNombre;

		$this->nNivelLocura = 0;

	}

	function fnHablar()
	{
		echo "dire cosas que hieran";
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

	function fnDimeArrogancia()
	{

		fnEcho("La locura es ". $this->nNivelLocura);
	}


	function fnSetArrogancia($nlocura)
	{
		$this->nNivelLocura = $nlocura;

	}

}




 ?>
	

