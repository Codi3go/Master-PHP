<?php

//VARIABLES PREDEFINIDAS DEL PHP

//DEBUGUEAR
$nombre = "Diego Hoyos";
var_dump($nombre);


//Fechas
echo date ('d-m-y')."<br/>";


//Fecha en formato Unix
echo time()."<br/>";


//MATEMATICAS

echo "Raiz cuadrada de 10 : ". sqrt(10)."<br/>";

//Numero aleatorio
echo "Numero aleatorio entre 10 y 40 : ". rand(10,40)."<br/>";

//Numero pi
echo "Numero PI : ". pi()."<br/>";

//Redondear numero
echo "Redondear 7.891234 : ". round(7.891234,2);/*el numero despues de la coma
son la decimas que se quiere que redondee*/


echo "<br/>";

//MAS FUNCIONES GENERALES
echo "la variable 'nombre' es de tipo : ".gettype($nombre); //Mostrar tipo de variable

echo "<br/>";

//comprobar que el dato ingresado en una varaibles es de tipo STRMG
if(is_string($nombre)){
    echo "Esa variable es un String";
}

echo "<br/>";

//comprobar que el dato ingresado en una varaibles es de tipo float
if(is_float($nombre)){      
    echo "La variable nombre es un numero con decimales";
}

echo "<br/>";

//Para comprobar variables
if(isset($edad)){     
echo "La variable existe";
}
else{echo "la variable no existe";}

echo "<br/>";

//LIMPIAR ESPACIOS trim
$frase="      mi contenido     ";
var_dump(trim($frase));

//Eliminar variables o indices de Arrays unset

$year=2020;
unset($year);
var_dump($year);


echo "<br/>";

//COMPROBAR SI UNA VARIABLES ESTA VACIA O SU VALOR ES CERO, EMPTY

//$texto="";
//$texto=null;
//$texto=false;
$texto="     ";

if(empty(trim($texto))){
    echo "La variable texto esta vacia";
    
}else{
    echo "La variable texto tiene contenido";
}


echo "<br/>";
//CONTAR CARACTERES STRING strlen

$cadena = "12345";
echo strlen($cadena);


echo "<br/>";

//ENCOTNRAR CARACTER strpos mustra la ubicacion en bit de la letra o palabra

$frase = "La vida es bella";
echo strpos($frase, "i");


echo "<br/>";

//REMPLAZAR CONTENIDO O PALBRAS DE UN STRING str_remplace
$frase= str_replace("vida", "moto", $frase);
echo $frase;


echo "<br/>";

//CONVERTIR A MAYUSCULAS Y MINUSCULAS
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);
?>

