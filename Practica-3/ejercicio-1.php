<?php
// Mostrar la suma de números del 1 al 100 usando buble while


$suma = 0;
$i = 0;

while ($i <= 100) {
    $suma += $i;
    $i++;
}

echo "La suma de los numeros del 1 al 100 es: ". $suma;


?>