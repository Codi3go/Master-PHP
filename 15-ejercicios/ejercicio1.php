<?php
/*Ejercicio 1. Hacer un programa en PHP  que tenga un array con 8 numeros y que
 haga lo siguiente:
 -Recorrerlo y mostrarlo
 -Ordenarlo y mostrarlo
 -Mostrar su longitud
 -Buscar algun elemento dentro del array.
 */

//Funciones
function mostrarArray($numeros){
    $resultado="";
    foreach ($numeros as $numero){
    $resultado.=$numero."<br/>";
    } 
    return $resultado;
}
    

echo"<h3>Ejercicio 1 (Recorrerlo y mostrarlo)</h3>";
$numeros=[5,4,9,8,6,7,1,3];
echo mostrarArray($numeros);
    

echo"<hr/>";

echo"<h3>Ejercicio 2 (Ordenarlo y mostrarlo)</h3>";
asort($numeros);
echo mostrarArray($numeros);
    


echo"<hr/>";

echo"<h3>Ejercicio 3 (Mostrar su longitud)</h3>";

echo "La longitud del Array es = ". count($numeros);


echo"<hr/>";

echo"<h3>Ejercicio 4 (Buscar algun elemento dentro del array)</h3>";
$buenqueda=array_search("3", $numeros);
echo "El numero que busca esta en la posición numero ".$buenqueda." del Array";

echo"<hr/>";

echo"<h3>Ejercicio 4 (Buscar desde la URl)</h3>";

if(isset($_GET["numero"]))
$busqueda=$_GET["numero"];
$search=array_search($busqueda, $numeros);
if(!empty($search)){
    echo "El numero buscado esta en la ubicación $search";
}
 else {
    echo "El numero no exite en el Array";    
}