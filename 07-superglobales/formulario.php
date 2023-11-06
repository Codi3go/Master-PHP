<!DOCTYPE HTML>
<html lang="es">

    <head>
        <meta charset="utf-8"/>
    <title>Formulario en php</title>
    
    </head>
    
    <body>
       
        <h1>Formulario en PHP</h1>
        
         <!--Form=Formulario de html clasico
         method= para invocar el parametro Get
         action=a que pagina envio el contenido del formulario-->
       <!-- <form method="GET" action="recibir.php" >-->    
            
       <form method="POST" action="recibir.php">
         
            
            <p>
            <label for="combre">Nombre</label>    <!--Titulo que vera el usuario ene l input-->
            <input type="text" name="nombre"/> <!--input type=metodo de entrad tipo texto, name=identificador del input.-->
           
            </p>
            <p>
            <label for="apellido">Apellido</label>    
            <input type="text" name="apellido"/>
            </p>
            
            <input type="submit" value="Enviar datos"/> <!<!-- Input submit boton, value es el texto que mostrara el boton -->
            
        </form>
    <?php


    ?>
    </body>
</html>