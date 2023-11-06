<?php
/*EJERCICIO 2. Escribir un programa con PHP que añada valores a un array mientras que su 
 *longitud sea menor a 120 y luego mostrarlo por pantalla.
 */


function mostrarArray($coleccion){
    $resultado="";
    foreach ($coleccion as $numero){
    $resultado.=$numero."<br/>";
    } 
    return $resultado;
}
    


$coleccion=array();
for($i=0;$i<=120;$i++){
    array_push($coleccion, "Elemento ".$i);

}
//echo $coleccion[45];

echo mostrarArray($coleccion);

?>