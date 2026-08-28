<html>

<head>
    <title>Formulario de entrada del dato</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        input[type="text"] { padding: 5px; }
        input[type="submit"] { padding: 6px 16px; }
    </style>
</head>

<body>
    <!-- este envía los datos al archivo que procesa la edad -->
    <form method="post" action="Aportes para el desarrollo.php">
        Ingrese su nombre:
        <input type="text" name="nombre" id="nombre">
        <br>
        <br>
        Ingrese su Edad:
        <input type="text" name="edad" id="edad">
        <br> <br>
        <input type="submit" value="confirmar">
    </form>
</body>

</html>