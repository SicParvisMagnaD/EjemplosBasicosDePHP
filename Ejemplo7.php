<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        input[type="text"] { padding: 5px; }
        input[type="submit"] { padding: 5px 15px; }
    </style>
</head>
<body>
    <!-- este formulario manda el nombre a Ejemplo8.php -->
    <form action="Ejemplo8.php" method="get">
    <input type="text" name="nombre"><br><br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>