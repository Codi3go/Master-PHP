<?php
/* EJERCICIO 5.
 Hacer un programa que muestre todos los numeros entre dos 
 * numeros que nos lleguen por la URL.


 * //MI RESPUESTA
 
if(isset($_GET['numero1'])&&isset($_GET['numero2'])){
    
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    
    if($numero1==$numero2){
    echo "Los numeros son iguales por favor ingrese dos valores diferentes.";
    }
    elseif($numero1<$numero2){
        $num=$numero1;
                while($num<$numero2){
        echo $num."<br>";
        $num++;
    }
    }elseif($numero1>$numero2){
        $num=$numero2;
                while($num<$numero1){
        echo $num."<br>";
        $num++;
                } 
}else{
    echo "Ingrese dos valores por URL.";
}
    }
   
 */

//RESPUESTA Instructor

if (isset($_GET['numero1'])&&isset($_GET['numero2'])){
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    
    if($numero1<$numero2){
            for($i=$numero1;$i<=$numero2;$i++){
            echo "<h4>$i</h4>";
            }
        }else{
            echo "<h1>El numero 1 debe ser menor al numero 2</h1>";
        }
}else{
    echo "<h3>Ingrese por URL dos valores para operar</h3>";
    }   


?>