<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de entrada del dato</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 500px; margin: 40px auto; padding: 30px; background: #fff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        label { font-weight: bold; color: #444; }
        input[type="text"] { width: 100%; padding: 10px; margin: 8px 0 20px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        input[type="submit"] { width: 100%; background-color: #28a745; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; font-weight: bold; }
        input[type="submit"]:hover { background-color: #218838; }
        hr { border: 0; border-top: 1px solid #eee; margin: 30px 0; }
        .resultado { padding: 15px; background: #f8f9fa; border-radius: 4px; border: 1px solid #dee2e6; }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="nombre">Ingrese su nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="edad">Ingrese su edad:</label>
        <input type="text" name="edad" id="edad">

        <input type="submit" value="Confirmar">
    </form>

<?php
if (isset($_POST['nombre']) && isset($_POST['edad'])) {
    echo "<hr><div class='resultado'>";
    $Nombre = $_POST['nombre'];
    $Edad = intval($_POST['edad']);

    echo "<p>El nombre es: <strong>" . $Nombre . "</strong></p>";

    if ($Edad >= 18) {
        echo "<p style='color: #28a745;'>Usted puede votar en las próximas elecciones 2028.</p>";
    } else {
        echo "<p style='color: #dc3545;'>Usted no es mayor de edad.</p>";
    }
    echo "</div>";
}
?>
</body>
</html>