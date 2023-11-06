<?php
//EJERCICIO 3
/* Escribir un porgrama que imprima por pantalla los cuadrados
 (numero multiplicado por si mismo) de los 40 primeros numeros
 naturles PD:Utilizar bucle while.
 */

/*MI RESPUESTA
 $numero=1;

while($numero<=40){
    echo ($numero*$numero)."<br>";
    $numero++;
}

 */

/*RESPUESTA INSTRUCTOR

$contador=0;
while($contador<=40){
    $cuadrado=$contador*$contador;
    echo "<h3>El cuadrado de $contador es $cuadrado</h3>";
    $contador++;
}
*/
//RESPUESTA USANDO FOR

for($contador=0;$contador<=40;$contador++){
    $cuadrado=$contador*$contador;
    echo "<h3>El cuadrado de $contador es $cuadrado</h3>";
}

 ?>
 