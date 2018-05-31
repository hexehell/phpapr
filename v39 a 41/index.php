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
    
    <div class="container jumbotron"> 
        <h2>Insertar (Query directo)</h2>
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
                <label for="txtEmail">Email</label>
            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
          </div>

          <button type="submit" name="btnEnviarIns" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
    <div class="container">
    <?php
    
        if(isset($_POST["btnEnviarIns"]))
        {
            
            $sNombre= $_POST["txtNombreIns"];
            $sApellido = $_POST["txtApellidoIns"];
            $sEmail = $_POST["txtEmail"];
            
                       
	


            $sQuery = "Insert into `tbl_ses_usuarios` ( `firstname`, `lastname`, `email`) VALUES(";
            $sQuery = $sQuery . "'$sNombre',";
            $sQuery = $sQuery . "'$sApellido',";
            $sQuery = $sQuery . "'$sEmail')";
            
            
            
            
             $scon->query($sQuery);
        }
    
    ?>
    </div>
    
    <div class="container jumbotron"> 
        <h2>Insertar (Store Procedure)</h2>
        <form method="POST" action=".">
          <div class="form-group">
            <label for="txtNombreIns">Nombre</label>
            <input type="text" class="form-control" id="txtNombreIns" name="txtNombreIns2" aria-describedby="nombre" placeholder="Nombre Usuario">
            
          </div>
          <div class="form-group">
            <label for="txtApellidoIns">Apellido</label>
            <input type="text" class="form-control" id="txtApellidoIns" name="txtApellidoIns2" placeholder="Apellido">
          </div>
            
          <div class="form-group">
                <label for="txtEmail">Email</label>
            <input type="text" class="form-control" id="txtEmail" name="txtEmail2" placeholder="Email">
          </div>

          <button type="submit" name="btnEnviarIns2" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
    <div class="container">
        <?php
    
        if(isset($_POST["btnEnviarIns2"]))
        {
            
            $sNombre= $_POST["txtNombreIns2"];
            $sApellido = $_POST["txtApellidoIns2"];
            $sEmail = $_POST["txtEmail2"];
            
                       
	
           $stmt = $scon->prepare(" CALL `usp_ses_Usuario_Ins`(?,?,?)");
            
            mysqli_stmt_bind_param ($stmt ,"sss", $sNombre, $sApellido, $sEmail);
            
            $stmt->execute();

       
         
            
            
            
        }
    
    ?>
    </div>
    
    
    <div class="container jumbotron"> 
        <h2>Buscar (Store Procedure)</h2>
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

          <button type="submit" name="btnEnviarSel2" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
    <div class="container">
	<?php 

	
        
        if(isset($_POST["btnEnviarSel2"]))
        {

            $sNombre= $_POST["txtNombre"];
            $sApellido = $_POST["txtApellido"];
           
             
          
             $Query = " CALL `usp_ses_Usuario_Sel`(?,?)";
             
             $tblDatos = new clsTabla($scon, $Query);
             
             $tblDatos->sNombre = $sNombre;
             $tblDatos->sApellido = $sApellido;
             
             $tblDatos->fnPitarTablaSP();
                   
         //   mysqli_prepare($scon," CALL `usp_ses_Usuario_Sel`(?,?)");   
         //  
         //   mysqli_stmt_bind_param($stmt, "ss", $sNombre,$sApellido);
         //       
         //   $stmt->execute();
//
         //   while ()
         //   {
         //           printf ("%s (%s)\n", $nombre, $código);
         //   }
            
            
             
            mysqli_close($scon);
        }

	 ?>
	
    </div>
    
    <script  src="js/jquery.js" ></script>
    <script src="js/bootstrap4.min.js"></script>    
    <script  src="js/jsScrollSpy.js"></script>
</body>
</html>