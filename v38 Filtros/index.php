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

    
    
    <div class="container jumbotron"> 
        <h2>Buscar</h2>
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

          <button type="submit" name="btnEnviarSel" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
    <br/>

    <div class="container">
	<?php 

	include_once ("fxFunciones.php");        
        include ("phpDatosConexion.php");
        include ("Clases.php");
        
        if(isset($_POST["btnEnviarSel"]))
        {

            $sNombre= $_POST["txtNombre"];
            $sApellido = $_POST["txtApellido"];
            
            
            
            $sQuery = "select * from tbl_ses_usuarios";
            $sQuery = $sQuery . " where firstname = '$sNombre'";
            $sQuery = $sQuery . " or lastname = '$sApellido'";
            


            
            
            $tblDatos = new clsTabla($scon,$sQuery);
            
             $tblDatos->fnPitarTabla();
             
             mysqli_close($scon);
        }

	 ?>
	
    </div>
    
    <br/>
    
    
    
    <div class="container jumbotron"> 
        <h2>Insertar</h2>
        <form method="POST" action=".">
          <div class="form-group">
            <label for="txtNombreIns">Nombre</label>
            <input type="text" class="form-control" id="txtNombreIns" name="txtNombreIns" aria-describedby="nombre" placeholder="Nombre Usuario">
            
          </div>
          <div class="form-group">
            <label for="txtApellidoIns">Apellido</label>
            <input type="text" class="form-control" id="txtApellidoIns" name="txtApellidoIns" placeholder="Apellido">
          </div>
            
          <div class="form-group">
                <label for="txtEmail">Apellido</label>
            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Apellido">
          </div>

          <button type="submit" name="btnEnviarIns" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
    
    <?php
    
        if(isset($_POST["btnEnviarIns"]))
        {
            
            $sNombre= $_POST["txtNombre"];
            $sApellido = $_POST["txtApellido"];
            $sEmail = $_POST["txtEmail"];
            
                       
	


            $sQuery = "Insert into";
            $sQuery = $sQuery . " where firstname = '$sNombre'";
            $sQuery = $sQuery . " or lastname = '$sApellido'";
            
            
            
            
        }
    
    ?>
    
    <script  src="js/jquery.js" ></script>
    <script src="js/bootstrap4.min.js"></script>    
    <script  src="js/jsScrollSpy.js"></script>
</body>
</html>