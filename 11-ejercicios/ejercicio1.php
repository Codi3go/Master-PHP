<?php
/*EJERCICIO 1
 Crear dos variables "pais" y "continente" y mostrar su valor por pantalla.
Poner en un comentario que tipo de dato tienen.
 */

$pais="colombia";
$continente="america";
$tipopais= gettype($pais);
$tipocontinente= gettype($continente);
        
echo "El pais es: $pais"."<br>";
echo "El continente es: $continente"."<br>";
echo $pais." y ".$continente. " son de tipo ". $tipopais." y ". $tipocontinente ." respectivamente.";

?>