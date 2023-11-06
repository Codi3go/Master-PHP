<?php

/*EJERCICIO 3. Programa que compruebe si una variable esta vacia si esta vacia,
 rellenarla con texto en minusculas y mostralos en mayusculas y negrita.
 */

$texto="";
if(empty($texto)){
    $texto="hola yo soy el relleno de la variable texto";
    $textoMAYUS= strtoupper($texto); //Convierte el contenido de $texto en mayus
    
    echo "<strong>$textoMAYUS</strong>";

}
else{
    echo "la variable tiene este conetnido dentro : ".$texto;
}

    



?>
