<?php
//Tomando la información de la pagina formularios se invocan con el parametro GET
//Por ejemplo se va a imprimir la imformación recogida en formularios.

//echo "<h1>".$_GET['nombre']."</h1>"; //para recibir la informacion se esta utilizando el array [nombre]
//echo "<h1>".$_GET['apellido']."</h1>";

echo "<h1>".$_POST['nombre']."</h1>"; 
echo "<h1>".$_POST['apellido']."</h1>";

var_dump($_POST); //Mostrar la infomracion que se va a recibir por GET.
?>