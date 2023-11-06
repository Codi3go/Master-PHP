<?php
/*BUCLE WHILE
Estructura de control que itera o repite la ejecución
  de una serie ded instrucciones tantas veces como se 
 requiera a base de unas condiciones.
  
 while(condicion){                //while significa mientras que la condicion se cumpa haga...
 bloque de instrucciones
 otra instruccion
 }
*/


$numero=0;
while($numero<=100){
    echo $numero;
    if($numero !=100){
        echo ", ";
    }elseif($numero==100)
        echo '.';

$numero++;
}




//EJEMPLO TABLA DE MULTIPLICAR
if (isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero =(int) $_GET['numero'];
}else{
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador=1;
while($contador<=10){
    echo "$numero x $contador = ".($numero*$contador)."<br>";
    $contador++;
}

echo "<hr>";
/* DO WHILE
  
 do{
    //Bloque dee instruccione
    }while (condicion);
 
 */

/*DO WHILE
 do{
    //Bloque de isntrucciones
    }while(condicion);
 */

$edad=18;
$contador=1;
do{
    echo "Tienes acceso al local privado $contador <br>";
        $contador++;        
}while ($edad >=18 && $contador<=10);
?>