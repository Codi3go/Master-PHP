//Estructura basica de php dentro de la estructura html

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Imprimir por panatalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP - Codi3go</h1>  
        
        <?="Bienvenido al curso de PHP"?>
        
        <?php
        //Este comentario solo se ve en PHP, no lo procesa html, es propio del backend, pero es de un solo renglon
        /*Este es 
         * un comentario
         * de multiples
         * lineas*/
            echo "<h3>Listado de videojuegos</h3>";
            echo "<ul>"
            
                . "<li>GTA</li>"
                . "<li>Fifa</li>"
                . "<li>Mario Bros</li>"
                . "</ul>";
            echo '<p>Esta es toda'.' - '.'Lista de juegos </p>';
        ?>
    </body>
</html>
