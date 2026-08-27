<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Ejemplo de funciones para las variables</h1>
    <?php
// Comprobación de instalación de PHP
$ed = 42;
$nom = "Juan";
if (is_int($ed) && is_string($nom)) 
    print("$nom tiene $ed años");
?>

</body>
</html>