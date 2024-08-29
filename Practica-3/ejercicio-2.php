<?php

echo "<h3>Mostrar los números pares del 1 al 200, excepto el rango entre 50 y 125 usando
bucle for. </h3>";

for ($i = 2; $i <= 200; $i += 2) {
    if ($i >= 50 && $i <= 125) {
        continue;
    }
    echo $i. ", ";
}

?>