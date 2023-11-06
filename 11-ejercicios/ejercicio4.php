<?php
/* EJERCICIO 4 (RESOUESTA PROFESOR)
 Recoger 2 numero por la url(parametro get) y hacer todas las operaciones
 basicas de una calculadora, suma, resta, multiplicacion y division.
 
if(isset($_GET['numero1'])&&isset($_GET['numero2'])){
    
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    
    echo "<h1>Calculadora</h1>";
    echo "Suma: ".($numero1+$numero2)."<br>";
    echo "Resta: ".($numero1-$numero2)."<br>";
    echo "Multiplicación: ".($numero1*$numero2)."<br>";
    echo "División: ".($numero1/$numero2)."<br>";
    
}else{
echo "<h2>Ingrese valores a operar por la URL</h2>";
}
*/

/* EJERCICIO 4
 Recoger 2 numero por la url(parametro get) y hacer todas las operaciones
 basicas de una calculadora, suma, resta, multiplicacion y division.
 */

if (isset($_GET['numero1'])&&isset($_GET['numero2'])){
    
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    
    echo "<h2>Calculadora Juan Diego</h2>";
    echo "La suma de $numero1 + $numero2 es = ".($numero1+$numero2)."<br>";
    echo "La resta de $numero1 - $numero2 es = ".($numero1-$numero2)."<br>";
    echo "La multiplicación de $numero1 * $numero2 es = ".($numero1*$numero2)."<br>";
    echo "La división de $numero1 / $numero2 es = ".($numero1/$numero2);
   
}else{
    echo "Por favor ingrese por URL los dos numeros a operar";
}
?>