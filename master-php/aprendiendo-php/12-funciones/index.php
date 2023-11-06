<?php

/*Son ordenes o instrucciones agrupadas que realizan una tarea concreta 
estas funciones siempre llevan un nombre especifico con el cual se pueden 
invocar tantas veces como se necesite, para no tener que repetir codigo.
function es una palabra reservada de php, acontinuacion la estructura basica:
 funtion nombreDeMiFuncion (){
 Bloque o conjunto de instrccuoiones u ordenes}
 */

/*EJEMPLO 1 (Funcion para imprimir 4 cosas por pantalla)
function muestraNombres(){
    
    echo "Maria Isabel Hoyos Osorio<br/>";
    echo "Diego Andrés Hoyos Osorio<br/>";
    echo "Victor Emilio Hoyos Osorio<br/>";
    echo "Hermanos Hoyos Osorio<hr/>";
};

//Invocar funcion

muestraNombres();
muestraNombres();
muestraNombres();
muestraNombres();

*/

//EJEMPLO 2, Generar la tabla de multiplicar de un numero
//este codigo genera multiplicación,se crea la funcion tabla
//se le asigna la variable $numero, seguido se imprime el titulo del
//proyecto, y acontinuación con un for se hace la multiplicación de
//$numero*$i 10 veces segun la condicion del for, finalmente se imprime
//cada iteracion de $numero con el for y se concatenan titulos auxiliares.
function tabla($numero){
    echo "<h3>Tabla de multiplicar del $numero</h3>";
    for($i=1;$i<=10;$i++){
        echo "$numero x $i = ".($numero*$i)."<br/>";
        
    }
}
/*con este valor solo imprimiria un valor unico y lo estaria entregando
desde el codigo
tabla(55);*/

/*INTRODUCIENDO EL VALOR DESDE LA URL
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}
else
    echo "introduzca un numero para mostrar la tabla de multiplicar";
*/

//imprimir todas las tablas
for($i=10;$i<=20;$i++){
    tabla($i);
}




//EJEMPLO 3 Calculadora de funciones basicas

function calculadora($numero1,$numero2){
    
    //Conjunto de instrucciones a ejecutar.
    $suma= ($numero1+$numero2);
    $resta= ($numero1-$numero2);
    $multiplicacion= ($numero1*$numero2);
    
    if($numero2!=0){
    $division= ($numero1/$numero2);
    echo "Suma: $suma <br/>";
    echo "Resta: $resta <br/>";
    echo "Multiplicación: $multiplicacion <br/>";
    echo "División: $division";
    }else 
        echo "El divisor (numero2) debe ser diferente de cero";
}

if(isset($_GET['numero1'])&&(isset($_GET['numero2']))){
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    calculadora($numero1, $numero2);
    
} else {
   echo "Ingrese por URl los dos numeros que desea operar";
}
echo "<hr>";
calculadora(4, 2);


//EJEMPLO DE RETURN
function suma($a, $b) {
    $resultado = $a + $b;
    return $resultado;
}

$valor = suma(5, 3); // Llama a la función suma y captura su valor de retorno
echo "<hr>La suma es: $valor"; // Muestra "La suma es: 8"


        
?>