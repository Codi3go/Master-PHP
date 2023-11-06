<?php
//Constantes, el numero que se le ingresa nunca se va a poder cambiar
//Es un contenedor que no puede variar

define ('nombre', 'Diego Hoyos'); //palabra define + nombre de la constante + valor de la contante
define ('alias', 'Codi3go');

echo '<h1>'.nombre.'</h1>';
echo '<h2>'.alias.'</h2>';

//Variable: Se puede cambiar su contenido las veces que quiera

$alias = "Codi3go";
$alias = "Dansh";

echo '<h1>'.$alias.'</h1>';

//Constantes predefinidas

echo PHP_OS;  //Version del sistema operativo
echo "<br>";
echo PHP_VERSION;         //Verion del php
echo "<br>";
echo PHP_EXTENSION_DIR;   //Ubicación de la extensión del php instalado
echo "<br>";
echo __LINE__;            //El numero de la linea donde estoy imprimiendo
echo "<br>";
echo __FILE__;           //Ruta del archivo

?>