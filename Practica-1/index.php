<?php

$cadena = "Hola mundo";


var_dump($cadena);
echo '<br>';

echo $cadena;

$nombre = 'Kevin';
$apellido = 'Montano';
$vivo = true;

// comnetarios 
// una linea
# una linea 
/* 
varias lineas
 */
// reasignar el valor y tipo de la variable $cadena
echo '<br>';
$cadena = 7;
var_dump($cadena);


$entero  = 7;

$estatura = 1.67;

echo '<br><br>';


echo "Mi nombre es $nombre $apellido y mido $estatura";
echo "</br>";
echo "</br>";


echo "<label for='nombre'>Nombre: </label>";
echo "<input type='text' name='nombre' placeholder='ingrese su nombre' />";
?>