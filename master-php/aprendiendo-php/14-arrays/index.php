<?php

/* ARRAYS
  Es una colección o un conjunto de datos/valores,bajo un unico nombre.
 Para acceder a esos valores podemos usar un indice numerico o alfanuemerico.
 En resumen es una colección de datos en una variable.
 */

//Ejemplo de variable nomral vs array
$pelicula="Batman";
$peliculas= array('Batman', 'Spiderman', 'EL señor de los anillos');
        
//var_dump($peliculas);
//echo $peliculas[2];

//recorrer array con bucle for

echo "<h1>Listado de peliculas</h1>";
for($i=0;$i<count($peliculas);$i++){ //count es una palabra reservada que cuenta los elementos del array
    echo "<li>".$peliculas[$i]."</li>";
    
}
echo "</ul>";

//Pero resulta mejor utilizar el forecah

echo"<br/>";

echo "<h1>Listado de peliculas</h1>";
echo"<ul>";
foreach ($peliculas as $peliculita) {
    echo "<li>".$peliculita."</li>";
    
}
echo"<ul/>";


//ARRAY ASOCIATIVO

$personas=array(
  'nombre' => 'Diego',
   'apellidos' => 'Hoyos',
    'web' => 'Codi3go.com'
);

echo $personas['apellidos'];


//ARRAYS MULTIDIMENSIONALES

$contactos = array(
    array(
        'Nombre' => 'Diego',
        'email' => "codi3go@gmail.com"
        ),
    array(
        'Nombre' => 'Victor',
        'email' => "bikcode@gmail.com"
        ),
    array(
        'Nombre' => 'Isabel',
        'email' => "isa@gmail.com"
)
);
var_dump($contactos);

echo "<br/>";

echo $contactos[1]['email'];

echo "<br/>";
//con foreach
foreach ($contactos as $key => $contacto) {
    echo ($contacto['Nombre'])."<br/>";
    
}


?>