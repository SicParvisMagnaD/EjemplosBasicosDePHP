<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 4 - Casting</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 600px; margin: 40px auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .linea { padding: 10px; border-left: 4px solid #0056b3; background: #f4f4f4; margin-bottom: 15px; }
    </style>
</head>
<body>
<?php
$foo = 10;
$bar = (boolean) $foo;

echo "<div class='linea'>El valor de la variable bar es: " . ($bar ? 'true (1)' : 'false') . "</div>";

$foo = (int)$bar; 
echo "<div class='linea'>El valor de la variable foo es: $foo</div>";
?>
</body>
</html>