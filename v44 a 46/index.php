<!DOCTYPE html>
<?php

	include_once ("fxFunciones.php");        
        include ("phpDatosConexion.php");
        include ("Clases.php");
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>38 Filtros</title>
        <link rel="stylesheet" href="css/bootstrap4.min.css">
	<!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/botones.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        
</head>





<body>
    
    
    
   <div class="container jumbotron"> 
        <h2>Actualizar (Store Procedure)</h2>
        <form method="POST" action=".">
          <div class="form-group">
            <label for="txtNombreIns">Nombre</label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" aria-describedby="nombre" placeholder="Nombre Usuario">
            
          </div>
          <div class="form-group">
            <label for="txtApellidoIns">Apellido</label>
            <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Apellido">
          </div>
            
          <div class="form-group">
                <label for="txtEmail">Email</label>
            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
          </div>

          <button type="submit" onlick="" name="btnBuscarAct" class="btn btn-primary">Buscar</button>
          <button type="submit" name="btnActualizarAct" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    
    <div class="container">
        <?php
    
        if(isset($_POST["btnEnviarIns2"]))
        {
            
            $sNombre= $_POST["txtNombreIns"];
            $sApellido = $_POST["txtApellidoIns"];
            $sEmail = $_POST["txtEmail"];
            
                       
	
            $stmt = $scon->prepare(" CALL `usp_ses_Usuario_Upd`(?,?,?)");
            
            mysqli_stmt_bind_param ($stmt ,"sss", $sNombre, $sApellido, $sEmail);
            
            $stmt->execute();

       
         
            
            
            
        }
        
        
        if(isset($_POST["btnBuscarAct"]))
        {

            $sNombre= $_POST["txtNombre"];
            $sApellido = $_POST["txtApellido"];
            $sEmail = $_POST["txtEmail"];
             
          
             $Query = " CALL `usp_ses_Usuario_Sel`(?,?,?)";
             
             $tblDatos = new clsTabla($scon, $Query);
             
             $tblDatos->sNombre = $sNombre;
             $tblDatos->sApellido = $sApellido;
             $tblDatos->sEmail = $sEmail;
             
             $tblDatos->fnPitarTablaSP();
                  
             
            mysqli_close($scon);
        }
    

        
    ?>
    </div>
    
    <script  src="js/jquery.js" ></script>
    <script src="js/bootstrap4.min.js"></script>    
    <script  src="js/jsScrollSpy.js"></script>
    
    <?php
    
    
    
        if(isset($_POST["trEditar"]))
        {
             $Query = " CALL usp_ses_UsuarioID_Sel(?)";
            
           // echo("<script type='text/javascript'>$('#txtNombre').val('pito');</script>");
            
        }
    
    
    ?>
</body>
</html>