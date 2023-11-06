<?php
/*Ejercicio 4.
Crear un Script en php que tenga 4 variables, una de tipo array,
 otra de tipo string, otra int y otra booleana, y que imprima un mensaje, segun
 el tipo de variable que sea*/

$matriz=["hola",25];
$texto="Hola mundo";
$numero=30;
$verdadero=true;

if(is_array($matriz)){
    echo "Los datos en la variable conforman un array";
}else {
    echo 'La variables no es de tipo array';
}

echo "<hr/>";

if(is_string($texto)){
    echo "El dato de la variable es de tipo string";
}else {
    echo "La variable no es de tipo string";
}

echo "<hr/>";

if(is_int($numero)){
    echo "El dato de la variable es de tipo entero";
}else {
    echo "La variable no es de tipo entero";
}

echo "<hr/>";

if(is_bool($verdadero)){
    echo "El dato es de tipo booleano";
}else {
    echo "La variable no es de tipo boobleana";
}
echo "<hr/>";
?>