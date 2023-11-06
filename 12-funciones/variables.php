<?php

/*Varibles locales: Se definen dentro de uan función y no puede ser usada
fuera de la funcion, solo esta disponible dentro, a no ser que hagamos un 
return.
Variables globales: Son variables que se declaran fuera de una funcion
y estan disponibles  dentro y fuera de las funciones.
*/

$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";
/*Frase es una varible que es independiente y esta por fuera de todas
 las funciones*/
echo $frase; 

function holaMundo (){
    global $frase; /*Para poder invocar una funcion independiente se usa el
    parametro global*/
    echo "<h1>$frase</h1>";
    
    $year = 2019;
    echo "<h1>$year</h1>";
    
    return $year;
}
echo holaMundo();/*la unica manera de invocar una variable interna es agregando
un return, el cual es el resultado de la varibale, entonces se invoca mediante
        el nombre de la funcion que lo que hace es mostrar el resultado.*/


//FUNCIONES VARIABLES

function buenosDias (){
    
    return "Hola! Buenos dias :)";
}

function buenasTardes (){
    
    return "Hey!! Que tal ha ido la comida??";
}

function buenasNoches (){
    
    return "<h1>¿Te vas a dormir ya? Buenas noches!!</h1>";
}

$horario="Noches";
$miFuncion="buenas".$horario;
echo $miFuncion();

?>
