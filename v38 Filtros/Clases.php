

<?php 
require_once ("fxFunciones.php");


class clsTabla{
		
		var $ptrCon;
		var $sQuery;
		//private	static $ayuda=0;


		
				
		function __construct($pConexion,$psQuery){
			
					
                    $this->ptrCon = $pConexion;
                    $this->sQuery = $psQuery;
			
		}// fin constructor
	
                
               function fnPitarTabla()
               {
                   $res= mysqli_query($this->ptrCon,$this->sQuery);
                   
                   echo("<table class='table table-dark'>");
                   
                    while($row =mysqli_fetch_row($res))
                    {
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
	



