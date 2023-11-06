<?php
/* EJERCICIO 2
Escribir un script en php que nos muestre por pantalla todos los numeros
 pares que hay del 1 al 100
 */
/*MI RESPUESTA
$numero=0;

for ($num=0; $num<=100;$num+=2){
    echo $numero+$num."<br>";
}
 
 */


//RESPUESTA INSTRUCTOR
for ($i=1;$i<=100;$i++){
    if($i%2==0){
        echo $i."<br>";
    }
    
}

?>