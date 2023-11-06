<?php
//Variables superglobales

//Variables de servidor

echo '<h1>';
echo $_SERVER['SERVER_ADDR'];  //Mostrar la ip del servidor
echo '</h1>';


echo '<h1>';
echo $_SERVER['SERVER_NAME'];  //Mostrar nombre del servidor o dominio
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE'];  //Mostrar el software que usa el servidor
echo '</h1>';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];  //Mostrar los navegadores compatibles
echo '</h1>';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR'];  //Mostrar la ip del usuario
echo '</h1>';

?>