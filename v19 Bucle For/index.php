<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v19 Bucle For</title>

</head>
<style>
	
	span
	{

		margin-right:  25px
	}
	p
	{
		text-align: center;
	}

	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
		text-align: center;
		
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
		text-align: center;
	}
	.boxRes
	{
		width: 200px;
		height: 220px;
		font-weight: 1px 
		font-size: 1px;
		margin:auto;
		text-align: center;



	}

	.cafe
	{

		color: brown !important;
	}
	.espacio
	{
		/*max-height: 1px;*/
		margin:0;
		padding: 0;
	}


</style>


<body>

<p class=""></p>

<h1>For</h1>




<div class="boxRes validado">
<?php 

include("fxFunciones.php");

for($i=0;$i<11;$i++)
{
	for($j=0;$j<$i;$j++)
	{
		echo "*";

	}

	echo "<div class'espacio'></div>";

}


 ?>
</div>



<div class="boxRes cafe">
	<?php 

$var=0;

for($i=0;$i<10;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo "*";

	}

	echo "<div class'espacio'></div>";

}


	 ?>

</div>

<p >
	<?php 

	$x =1;
	do
	{

		echo "Mira mi pinito, que bonito mi pinito hermoso bello";
	}
	while($x>1);


	 ?>
</p>





	
</body>
</html>