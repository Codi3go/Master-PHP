<?php

//Operadores aritméticos

//Definimos las variables numero

$numero1 =55;
$numero2 =33;

echo 'suma:'.($numero1+$numero2).'<br>';
echo 'resta:'.($numero1-$numero2).'<br>';
echo 'multiplicación:'.($numero1*$numero2).'<br>';
echo 'división:'.($numero1/$numero2).'<br>';
echo 'resto:'.($numero1%$numero2).'<br>'; //resto de la división

//Operadores d incremento y decremento
$year = 2019;

$year++;     //++ es el operador de incremento, incrementa de 1 en 1
//Tambien funciona ++$year; (Preincremento)

$year--;     //-- es el operador de decremento, decrementa de 1 en 1
//Tambien funciona --$year; (Predecremento)

echo '<h1>'.$year.'</h1>';


//Operadores de asignación, el mas usado el signo de =

$edad = 55;

echo $edad.'<br>';

echo ($edad+=5).'<br>';  //Se asigna la suma de 5 a la variable edad
echo ($edad-=5).'<br>';  //Se asigna la resta de 5 a la variable edad
echo ($edad*=5).'<br>';  //Se asigna la multiplicacion de 5 a la variable edad
echo ($edad/=5).'<br>';  //Se asigna la división de 5 a la variable edad

?>

