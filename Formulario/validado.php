<?php 
session_start();
 ?>

<!DOCTYPE>
<html>
    <head>
        <title> Formulario </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/Style.css">
    </head>
    <body>


        <div>   
            <b>
                NOMBRES: 
            </b>
    	       <?php 
    			 echo $_SESSION['UserNames'];
    		  ?>
        </div>
        
        <div>
            <b>
                APELLIDOS: 
            </b>
            <?php 
    		      echo $_SESSION['UserLastNames'];
    		?>
        </div>

        <div>
            <b>
                TELEFONO:
            </b>
            <?php 
                  echo $_SESSION['Telefono'];
            ?>
        </div>

        <div>
            <b>
                CORREO:
            </b>
            <?php 
                  echo $_SESSION['Correo']; 
            ?>
        </div>

        <div>
            <b>
                ASUNTO:
            </b>
            <?php 
                  echo $_SESSION['Asunto'];
            ?>
        </div>

        <div>
            <b>
                MENSAJE:
            </b>
                <?php 
                      echo $_SESSION['Mensaje'];
                ?>
        </div>
	   
    </body>
</html> 
