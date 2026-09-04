<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de entrada del dato</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 450px; margin: 50px auto; padding: 30px; background: #fff; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        label { font-weight: 600; font-size: 14px; color: #555; }
        input[type="text"] { width: 100%; padding: 10px; margin: 8px 0 20px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        input[type="submit"] { width: 100%; background-color: #0056b3; color: white; padding: 12px; border: none; border-radius: 4px; cursor: pointer; font-size: 15px; font-weight: bold; transition: background 0.3s; }
        input[type="submit"]:hover { background-color: #004494; }
    </style>
</head>
<body>
    <form method="post" action="Aportes para el desarrollo.php">
        <label for="nombre">Ingrese su nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        
        <label for="edad">Ingrese su Edad:</label>
        <input type="text" name="edad" id="edad" required>
        
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>