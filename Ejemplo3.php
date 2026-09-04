<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 3 - Variables</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 600px; margin: 40px auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { color: #0056b3; font-size: 22px; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        .resultado { font-size: 18px; padding: 10px; background: #e9ecef; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Ejemplo de funciones para las variables</h1>
    <div class="resultado">
    <?php
    $ed = 42;
    $nom = "Juan";
    if (is_int($ed) && is_string($nom))
        print("$nom tiene $ed años");
    ?>
    </div>
</body>
</html>