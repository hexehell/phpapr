<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>38 Filtros</title>
        <link rel="stylesheet" href="css/bootstrap4.min.css">
	<!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/botones.css">
        
</head>





<body>

    
    <div class="container"> 
        <form method="POST" action=".">
          <div class="form-group">
            <label for="txtNombre">Nombre</label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" aria-describedby="nombre" placeholder="Nombre Usuario">
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
          </div>
          <div class="form-group">
            <label for="txtApellido">Apellido</label>
            <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Apellido">
          </div>

          <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <div class="container">
	<?php 

	include_once ("fxFunciones.php");        
        include ("phpDatosConexion.php");
        include ("Clases.php");
        
        if(isset($_POST["btnEnviar"]))
        {

            $sNombre= $_POST["txtNombre"];
            $sApellido = $_POST["txtApellido"];
            
            
	
            $scon = mysqli_connect($sHost,$sUsuario,$sContraseña);

            mysqli_set_charset($scon,"utf8");


            if(mysqli_connect_errno())
            {

                    fnEcho("No jalo");
                    exit();
            }



            mysqli_select_db($scon,$sDBnombre) or die("la base de datos: $sDBnombre, no existe");

            $sQuery = "select * from tbl_ses_usuarios";
            $sQuery = $sQuery . " where firstname = '$sNombre'";
            $sQuery = $sQuery . " or lastname = '$sApellido'";
            


            
            
            $tblDatos = new clsTabla($scon,$sQuery);
            
             $tblDatos->fnPitarTabla();
             
             mysqli_close($scon);
        }

	 ?>
	
    </div>
    
    <script  src="js/jquery.js" ></script>
    <script src="js/bootstrap4.min.js"></script>    
    <script  src="js/jsScrollSpy.js"></script>
</body>
</html>