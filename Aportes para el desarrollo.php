<?php

// Revisamos que el nombre y la edad hayan llegado del formulario
if (isset($_REQUEST['nombre']) && isset($_POST['edad'])) {

    $Nombre = $_REQUEST['nombre'];
    $Edad = intval($_POST['edad']); // pasamos la edad a número por si acaso

    echo "El nombre es: " . $Nombre . "<br>";

    // validamos si puede votar o no
    if ($Edad >= 18) {
        echo "Usted puede votar en las próximas elecciones 2028";
    } else {
        echo "Usted no es mayor de edad";
    }

} else {
    // si falta algún dato mostramos este mensaje
    echo "Por favor complete el formulario correctamente";
}

?>