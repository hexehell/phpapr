<?php 
require ("fxFunciones.php");

/**
* 
*/
class ClsSer //extends AnotherClass
{
	protected $sNombre;
	
	function ClsSer($psNombre)
	{
		

		$this->sNombre = $psNombre;
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

		fnEcho("empezar a cojer");

	}






}

class ClsPersona extends ClsSer
{


	var $nNivelLocura;



	function ClsPersona($psNombre)
	{

		$this->sNombre = $psNombre;

		$this->nNivelLocura = 0;

	}

	function fnCojer()
	{

		parent::fnCojer();

		fnEcho("Cojiendo");
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


class ClsEnte extends ClsSer
{

	private $nNivelArrogancia;



	function ClsEnte($psNombre)
	{

		$this->sNombre = $psNombre;

		$this->nNivelLocura = 0;

	}

	function fnHablar()
	{
		echo "dire cosas que hieran";
	}

	
	function fnDimeArrogancia()
	{

		fnEcho("La Arrogancia es ". $this->nNivelLocura);
	}


	function fnSetArrogancia($nlocura)
	{

		if($nlocura>100)
		{

			$nlocura = 100;
		}

		$this->nNivelLocura = $nlocura;

	}

}




 ?>
	

