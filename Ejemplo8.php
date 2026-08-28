<?php
// primero vemos todo lo que llegó, sea por get o por post
print "<pre>";
print_r($_REQUEST);
print "</pre>";

echo ".......<br>";


if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
} else {
    $nombre = 'No se ha ingresado un nombre correctamente';
}
echo "El nombre ingresado es: " . $nombre;
?>