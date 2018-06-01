

<?php 
require_once ("fxFunciones.php");


class clsTabla{
		
		var $ptrCon;
		var $sQuery;
                var $sNombre;
                var $sApellido;
                var $sEmail;
                var $sSubmit;


		
				
		function __construct($pConexion,$psQuery){
			
					
                    $this->ptrCon = $pConexion;
                    $this->sQuery = $psQuery;
                    $this->sNombre = "";
                    $this-> sApellido = "";
                    $this->sEmail = "";
                    $this->sSubmit = "";
		}// fin constructor
	
                
               function fnPitarTabla()
               {
                   $res= mysqli_query($this->ptrCon,$this->sQuery);
                   
                   echo("<table class='table table-dark table-hover'>");
                   
                   $bHeaders = false;
                   
                    while($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
                    {
                        if(!$bHeaders)
                        {
                            echo("<tr>");
                                foreach ($row  as $key=>$value) 
                                {

                                    echo("<th>".$key."</th>");

                                }
                            echo("</tr>");  
                            
                            $bHeaders = true;
                        }
                        
                        echo("<tr>");
                        
                            foreach ($row  as $value) 
                            {
                                echo("<td>".$value."</td>");
                            }
                         
                        echo("</tr>");
                    }
                   
                   echo("</table>");
                   
                   
               }
               
               function fnPitarTablaSP()
               {
                   
                   $stmt = mysqli_prepare($this->ptrCon,$this->sQuery);  
                    mysqli_stmt_bind_param($stmt, "sss", $this->sNombre,$this->sApellido, $this->sEmail);
                    $stmt->execute();
                    $res = mysqli_stmt_get_result ($stmt);
           
                    echo("<form method='POST' action='.' id='tblPost' name='tblPost'><input type='hidden' class='hidden' id='trEditar' name='trEditar' value='' /></form>");
                    echo("<table class='table table-dark table-hover'>");

                           $bHeaders = false;

                            while($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
                            {
                                if(!$bHeaders)
                                {
                                    echo("<tr>");
                                        echo("<th>Editar</th>");
                                        foreach ($row  as $key=>$value) 
                                        {

                                            echo("<th>".$key."</th>");

                                        }
                                    echo("</tr>");  

                                    $bHeaders = true;
                                }

                                echo("<tr>");
                                    
                                    foreach ($row  as $key=>$value) 
                                    {
                                        if($key=='id')
                                        {
                                            echo("<td class='text-center editar' onclick=\"$('#trEditar').val('$value');$('#tblPost').submit();\"><i class='far fa-edit'></i></td>");
                                            
                                            
                                        }
                                        echo("<td>".$value."</td>");
                                    }

                                echo("</tr>");
                            }

                    echo("</table>");
                   
                   
               }

	}




 ?>
	



