<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 8 - Recepción de Datos</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 600px; margin: 40px auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        pre { background: #f4f4f4; padding: 15px; border-radius: 5px; font-size: 14px; border: 1px solid #ddd; }
        .alerta { padding: 10px; background: #e2e3e5; border-left: 4px solid #6c757d; margin-top: 20px; }
    </style>
</head>
<body>
<?php
print "<h3>Datos recibidos (\$_REQUEST):</h3>";
print "<pre>";
print_r($_REQUEST);
print "</pre>";
echo "<hr>";

if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
} else {
    $nombre = 'No se ha ingresado un nombre correctamente';
}
echo "<div class='alerta'>El nombre ingresado es: <strong>" . $nombre . "</strong></div>";
?>
</body>
</html>