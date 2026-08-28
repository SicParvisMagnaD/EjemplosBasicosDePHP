<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1 { color: #444; font-size: 22px; }
    </style>
</head>
<body>
    <h1>Ejemplo de funciones para las variables</h1>
    <?php
    // probamos con is_int e is_string antes de imprimir
    $ed = 42;
    $nom = "Juan";
    if (is_int($ed) && is_string($nom))
        print("$nom tiene $ed años");
    ?>

</body>
</html>