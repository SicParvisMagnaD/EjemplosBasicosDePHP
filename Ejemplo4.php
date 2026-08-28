<?php
$foo = 10;
$bar = (boolean) $foo; // 10 se vuelve true (se ve como 1)

echo "El valor de la variable bar es: $bar <br><br>";

// ahora hacemos el casting al revés
$foo = (int)$bar; // true pasa a ser 1
echo "El valor de la variable foo es: $foo";
?>