<?php
/*Condicionales
 
 IF
 Estructura del IF -> if(condicion){instrucciones}else{otras instrucciones};
 */

//EJEMPLO 1
$color = "rojo";

if($color=="rojo"){
    echo "EL color es rojo";
} else {
    echo "El color no es rojo";
}



/*OPERADORES DE COMPARACIÓN
== Igual
=== Identico
!= diferente
<> diferente
!== no idedntico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que
 
 
 //OPERADORES LOGICOS
  &&=AND(Significa "y")
 ││=OR (Significa "ó") alt+124
 !=NOT (Significa "No")
 and, or (tambien funcionana directamente)
 
 
*/


//EJEMPLO 2
$year = 2020;
if($year == 2019){
    echo "<br>"."Estamos en el año 2019";
}
else{echo "<br>"."El año ".$year." no es 2019";
}



//EJEMPLO 3

$nombre = "Juan Diego";
$edad = 0.2;
$mayoria_edad = 18;

echo "<br>";

if($edad<$mayoria_edad){
    echo $nombre." es menor de edad";
}
else {
    echo $nombre." es mayor de edad";
}


//EJEMPLO 4
//else if
echo "<hr>";
$dia = 9;

       /* if ($dia == 1){
            echo "es lunes";
            }
            else{if($dia == 2){
            echo "es martes";
            }
            else{if ($dia==3){
                echo 'es miercoles';    
            }
            else {if($dia == 4){
                echo "es jueves";
            } 
            else{if ($dia == 5){
                echo 'es viernes';
            }
            else{if($dia == 6){
                echo 'es sabado';
            }
            else {if($dia == 7){
                echo 'es domingo';
            }
            else{
                echo "no es un dia de la semama, ingrese un numero del 1 al 7";
      
            }}}}}}}; */

//EJEMPLO 5, MEJORANDO EL EJEMPLO 4
if ($dia==1){
    echo 'Es lunes';
}
elseif($dia == 2){
            echo "es martes";
            }
            elseif ($dia==3){
                echo 'es miercoles';    
            }
            elseif($dia == 4){
                echo "es jueves";
            } 
            elseif ($dia == 5){
                echo 'es viernes';
            }
            elseif($dia == 6){
                echo 'es sabado';
            }
            elseif($dia == 7){
                echo 'es domingo';
            }
            else{
                echo "no es un dia de la semama, ingrese un numero del 1 al 7";
      
            };
            
 
 echo "<hr>";
 
 $edad1=18;
 $edad2=64;
 $edad_oficial=32;
 
 if($edad_oficial>=$edad1 && $edad_oficial<=$edad2){
     echo "esta en edad de trabajar";
 }
 else{
     echo 'No puede trabajar';
 }
 
 //EJEMPLO CON IF CON OR
 
 echo "<hr>";
 
 $pais="Usa";
 
 if($pais=="Mexico" || $pais=="Colombia" || $pais=="España"){
     echo "Se habla español";
 }
else{
    echo "No se habla español";
};

//SWITCH
 echo "<hr>";
 
 $mes=1;
 
 switch ($mes){
     case 5:
         echo 'Enero';
         break;
     case 2;
         echo 'Febrero';
         break;
     case 3;
        echo 'Marzo';
    default :
        echo 'Ingrese un numero del 1 al 3, solo se evalua el primer trimestre';
 }

 
 
 
?>