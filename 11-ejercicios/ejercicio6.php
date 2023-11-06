<?php

/*Ejercicio 6.
 Mostrar una tabla de html con las tablas de multiplicar del 1 al 10.
 */

echo "<table border='1'> <tr>"; //Inicio de la tabla

echo "<tr>";  //Inicio fila 1 de celdas
for ($cabecera=1;$cabecera<=10;$cabecera++){
    echo "<td><h6>Tabla del $cabecera</h6></td>";
}
echo "</tr>";  //Fin cierro la fila 1 de celdas

echo "<tr>";   //Inicio fila 2

for ($i=1;$i<=10;$i++){
    echo "<td>";
    
    for($x=1;$x<=10;$x++){
        echo "$i x $x = ".($i*$x)."<br>";
    }
    
}

echo "</tr>";  //Cierre fila 2


echo "</table>"; //Fin de la tabla

?>
