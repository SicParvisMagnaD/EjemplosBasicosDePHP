<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Votación</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 600px; margin: 40px auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .mensaje { padding: 15px; border-radius: 4px; margin-top: 10px; font-weight: bold; }
        .aprobado { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .denegado { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>
<?php
if (isset($_REQUEST['nombre']) && isset($_POST['edad'])) {
    $Nombre =$_REQUEST['nombre'];
    $Edad = intval($_POST['edad']); 

    echo "El nombre es: " . $Nombre . "<br>";

    if ($Edad >= 18) {
        echo "<div class='mensaje aprobado'>Usted puede votar en las próximas elecciones 2028</div>";
    } else {
        echo "<div class='mensaje denegado'>Usted no es mayor de edad</div>";
    }
} else {
    echo "<div class='mensaje denegado'>Por favor complete el formulario correctamente</div>";
}
?>
</body>
</html>