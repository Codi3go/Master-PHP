<?php
/*FOR
 
 for(variable contador, condicion, incremento o decremento del contador){
 //BLOQUE DE INSTRUCCIONES
 }
 
 */

$resultado=0;

for($numero=0; $numero<=100; $numero++){
    $resultado +=$numero;
    echo "<p>$resultado</p>";
}

echo "<h1>El resultado es: $resultado</h1>";




echo "<hr>";
if (isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero =(int) $_GET['numero'];
}else{
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del número $numero</h1>";


for($contador=1; $contador<=10; $contador++){
    echo "$numero x $contador = ".($numero*$contador)."<br>";
    
}
?>