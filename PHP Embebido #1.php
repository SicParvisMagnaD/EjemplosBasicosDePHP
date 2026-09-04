<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Embebido #1</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 600px; margin: 40px auto; padding: 30px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #0056b3; margin-bottom: 10px; }
        p { color: #666; margin-bottom: 20px; }
        .codigo-php { display: inline-block; padding: 15px 30px; background: #28a745; color: white; font-weight: bold; border-radius: 4px; font-size: 18px; }
    </style>
</head>
<body>
    <h1>Ejemplo simple.</h1>
    <p>Primer ejemplo de código PHP embebido dentro de código HTML.</p>
    
    <div class="codigo-php">
    <?php
    echo "¡Hola mundo!";
    ?>
    </div>
</body>
</html>