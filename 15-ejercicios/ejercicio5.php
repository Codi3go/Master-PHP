<?php
/* Crear un array con el contenido de la tabla:
 
 ACCIÓN     AVENTURA           DEPORTES
 GTA        SUPER MARIO        BASEBALL
 COD        GOW                FIFA
 HALO       ALADIN             MOTO GP
 
 Cada columna debe ir en un fichero separado (includes).
 
 */
$tabla=array(
    "ACCION"  =>array("GTA", "COD", "HALO"),
    "AVENTURA"=>array("SUPER MARIO", "GOW", "ALADIN"),
    "DEPORTES"=>array("BASEBALL", "FIFA", "MOTO GP")
);



$categorias= array_keys($tabla);
?>
<!<!doctype html>
<html lang=""es">
    <head>
        <meta charset="utf-8">
        <title>Hola</title>
                </head>
                <body>
<table border="5">
    <?php require_once 'ejercicio5/encabezado.php';?>
    <?php require_once 'ejercicio5/primera.php';?>
    <?php require_once 'ejercicio5/segunda.php';?>
    <?php require_once 'ejercicio5/tercera.php';?>
</table>
                </body>
</html>