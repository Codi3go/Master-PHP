<?php

$peliculas= array('Batman', 'Spiderman', 'EL señor de los anillos','Bob esponja');



//Ordenar datos del array alfabeticamente asort, con arsort alfabetico invertido
asort($peliculas);
var_dump($peliculas);

//para ordenar numeros o alfabeticamente sirve el sort

$numeros=[1,8,6,4,2,3,7,];
sort($numeros);
var_dump($numeros);


echo "<br/>";
//Anadir elementos al Array
$peliculas[]="Los trece fantasmas";
$peliculas[]="101 Dalmatas";
$peliculas[]="Stuart Little";
var_dump($peliculas);

echo "<hr/>";
//Tambien se pueden añadir elementos con array_push
array_push($peliculas,"Blanca nieves");
var_dump($peliculas);

echo "<hr/>";

//Eliminar el ultimo dato del Array
array_pop($peliculas);
var_dump($peliculas);

echo "<hr/>";

//Eliminar un dato en concreto del array
unset($peliculas [2]);
var_dump($peliculas);

echo "<hr/>";

//Sacar un elemento aleatorio del Array
echo array_rand($peliculas);
var_dump($peliculas);

//Si quisiera mostrar alatoriamente un dato
echo "<br/>";

$indice= array_rand($peliculas);
echo $peliculas[$indice];

//Imprimir invertidamente el Array
var_dump(array_reverse($peliculas));

echo "<hr/>";

//Buscar dentro de un Array
//Se puede usar una variable para guardar la busqueda
$resultado= array_search('Spiderman', $peliculas);
var_dump($resultado);

echo "<hr/>";

//contar numero de elementos en un array, puede usarse count o sizeof
echo count($peliculas);
echo "<br/>";
echo sizeof($peliculas);

?>