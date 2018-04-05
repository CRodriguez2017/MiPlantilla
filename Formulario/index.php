


<!DOCTYPE>
<html>
    <head>
        <title> Formulario </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/Style.css">
    </head>
    <body>
        
            

            <form method="post" action="contacto.php" class="form-horizontal" role="form">
                
                    <div class="container" id="principal">
                        <div class="form-group">
                            <label>Nombres</label>
                                <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Apellidos</label>
                                <input type="text" name="apellidos" value="<?php echo $apellidos ?>" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Telefono</label>
                                <input type="text" name="telefono" size="10" value="<?php echo $telefono ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>E-mail</label>
                                <input type="email" name="email" value="<?php echo $email ?>" id="email" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Asunto</label>
                                <input type="text" name="asunto" value="" required="" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Mensaje</label>
                        </div>
                        <div class="form-group">
                            <textarea rows="6" cols="50" placeholder="Escriba un mensaje..." class="form-control" name="mensaje"></textarea>
                        </div>
                            <div class="trans" id="boton">
                                <input type="submit" value="Enviar" class="btn btn-outline-dark">
                            </div>
                    </div>
                
            </form>
        </body>
</html>