<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 7 - Formulario GET</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 400px; margin: 40px auto; padding: 30px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        input[type="text"] { width: 100%; padding: 10px; margin: 10px 0 20px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        input[type="submit"] { width: 100%; background-color: #0056b3; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; font-weight: bold; }
        input[type="submit"]:hover { background-color: #004494; }
        label { font-weight: bold; color: #555; }
    </style>
</head>
<body>
    <form action="Ejemplo8.php" method="get">
        <label for="nombre">Ingrese su nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ej. Javier">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>