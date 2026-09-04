<?php
    if (date('a') == 'pm') {
        $saludo = 'Buenas tardes/noches!';
    } else {
        $saludo = 'Buenos días!';
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejemplo 1 - Saludo</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 600px; margin: 40px auto; padding: 40px 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #0056b3; margin: 0; font-size: 28px; }
    </style>
</head>
<body>
    <h1><?php echo $saludo; ?></h1>
</body>
</html>