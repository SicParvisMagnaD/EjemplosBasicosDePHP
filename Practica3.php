<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 3 - Variables dinámicas</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 600px; margin: 40px auto; padding: 40px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #0056b3; font-size: 32px; margin-bottom: 10px; }
        p { font-size: 18px; color: #555; background: #f4f4f4; padding: 15px; border-radius: 4px; display: inline-block; border: 1px solid #e0e0e0; }
        strong { color: #000; }
    </style>
</head>
<body>
<?php
$author1 = "John Doe";
$author2 = "Max Mustermann";

echo "<h1>Hello World!</h1>";
echo "<p>This dynamic web page was created by <strong>$author1</strong> and <strong>$author2</strong>.</p>";
?>
</body>
</html>