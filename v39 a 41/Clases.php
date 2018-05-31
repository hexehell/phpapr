

<?php 
require_once ("fxFunciones.php");


class clsTabla{
		
		var $ptrCon;
		var $sQuery;
                var $sNombre;
                var $sApellido;
		//private	static $ayuda=0;


		
				
		function __construct($pConexion,$psQuery){
			
					
                    $this->ptrCon = $pConexion;
                    $this->sQuery = $psQuery;
                    $this->sNombre = "";
                    $this-> sApellido = "";
                    
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
                    mysqli_stmt_bind_param($stmt, "ss", $this->sNombre,$this->sApellido);
                    $stmt->execute();
                    $res = mysqli_stmt_get_result ($stmt);
           
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

	}




 ?>
	



