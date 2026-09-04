<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 6 - Tipos de datos</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 600px; margin: 40px auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        pre { background: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; font-size: 14px; overflow-x: auto; }
    </style>
</head>
<body>
<?php
$nombre = "Juan";
$edad = 30;
echo "<p>Hola, mi nombre es <strong>" . $nombre . "</strong> y tengo <strong>" . $edad . "</strong> años.</p>";

$b = 3.1;
$c = true;

echo "<pre>";
var_dump($b, $c);
echo "</pre>";
?>
</body>
</html>