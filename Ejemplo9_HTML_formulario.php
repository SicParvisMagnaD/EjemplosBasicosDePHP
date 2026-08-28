<!DOCTYPE html>
<html>
<head>
    <title>Formulario de entrada del dato</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        form { margin-bottom: 20px; }
        input[type="text"] { padding: 5px; }
        input[type="submit"] { padding: 6px 16px; }
    </style>
</head>
<body>

    <!-- el mismo archivo recibe los datos, por eso action está vacío -->
    <form method="post" action="">
        Ingrese su nombre:<br>
        <input type="text" name="nombre" id="nombre"><br><br>

        Ingrese su edad:<br>
        <input type="text" name="edad" id="edad"><br><br>

        <input type="submit" value="confirmar">
    </form>

    <hr>

<?php
// mostramos el resultado solo si ya llenaron el formulario
if (isset($_POST['nombre']) && isset($_POST['edad'])) {
    $Nombre = $_POST['nombre'];
    $Edad = intval($_POST['edad']);

    echo "El nombre es: " . $Nombre . "<br>";

    if ($Edad >= 18) {
        echo "Usted puede votar en las próximas elecciones 2028";
    } else {
        echo "Usted no es mayor de edad";
    }
}
?>

</body>
</html>