<?php

/*TIPOS DE DATOS:
 Entero (int / integer), son numeros sin decimal =25
 Coma flotante o decimales (floar / double) =3.141532
 Cadenas (string) ="Hola yo soy un estring"
 Boleano (bool) = true o false
 null, es un dato vacio
 Array o vectores(conexion de datos)
 Objetos
 */

$numero = 100;
$decimal = 27.9;
$texto = "Soy un texto";
$verdadero =true;
$nula = null;

echo $numero." "."es"." ".gettype($numero)."<br>"; //gettype imprime el tipo de dato de la variable o constante.
echo $decimal." "."es"." ".gettype($decimal)."<br>";
echo $texto." "."es"." ".gettype($texto)."<br>";
echo $verdadero." "."es"." ".gettype($verdadero)."<br>";
echo $nula." "."es"." ".gettype($nula);

/*OJO:
 Las varibles no pueden empezar por un numero, pero si puede terminar o contener.
 Las variables no deben llevar espacios, ni guiones pero si puede llevar raya al piso.
 No se pueden colocar signos, ni tildes, ni ñ.
 Si uso comillas dobles para imprimir una variables, me imprime el resultado, pero si imprimo con comillas
 simples me va a imprimir como string, es decir el valor de la varibale.
 Si se quiere imprimir con comillas simples tocari usar concatenación.
 */

//Debugear (Ver toda la información que tiene una variable especifica.

$mi_nombre = "Diego Andrés Hoyos";

var_dump($mi_nombre);

/*ejemplo Escape: para imprimir un string y que me muestre las comillas, debo usar \" o \', esto se llama escape
tambien funciona  invocar comillas dobles se debe escapar con comillas simples y vecerversa, acontinuacion un ejemplo.*/
echo "Hola como estas  \"este comentario esta en comillas\"";
echo "<br>";
echo "Hola como estas  'este comentario esta en comilla'";
?>

