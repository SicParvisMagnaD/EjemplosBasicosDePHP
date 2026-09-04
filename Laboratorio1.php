<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio #1</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f4f7f6; color: #333; max-width: 700px; margin: 40px auto; padding: 30px; background: #fff; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        h1, h2 { color: #0056b3; font-size: 20px; border-bottom: 2px solid #f0f0f0; padding-bottom: 8px; margin-top: 30px; }
        h1 { font-size: 24px; margin-top: 0; }
        input[type="number"] { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        input[type="submit"] { background-color: #0056b3; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
        input[type="submit"]:hover { background-color: #004494; }
        hr { border: 0; border-top: 1px solid #eee; margin: 30px 0; }
        .respuesta { padding: 10px; background: #e9ecef; border-left: 4px solid #0056b3; border-radius: 0 4px 4px 0; margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Ejercicio 1: El área y perímetro de un círculo</h1>
    <div class="respuesta">
    <?php
        $r = 5; 
        $area = M_PI * pow($r, 2);
        $perimetro = 2 * M_PI * $r;
        echo "<strong>Radio fijo:</strong> $r <br>";
        echo "<strong>Área:</strong> " . round($area, 2) . "<br>";
        echo "<strong>Perímetro:</strong> " . round($perimetro, 2);
    ?>
    </div>
    <hr>

    <h2>Ejercicio 2: Cálculo del área de una circunferencia</h2>
    <form method="GET" action="">
        <label for="radio">Introduzca el radio (dato real):</label>
        <input type="number" step="any" name="radio" id="radio" required>
        <input type="submit" value="Calcular Área">
    </form>
    <?php
    if (isset($_GET['radio'])) {
        $radio = floatval($_GET['radio']);
        $area2 = M_PI * pow($radio, 2);
        echo "<div class='respuesta'>El área de la circunferencia es: <strong>" . round($area2, 2) . "</strong></div>";
    }
    ?>
    <hr>

    <h2>Ejercicio 3: Convertir pulgadas a centímetros</h2>
    <form method="GET" action="">
        <label for="pulgadas">Leer las pulgadas:</label>
        <input type="number" step="any" name="pulgadas" id="pulgadas" required>
        <input type="submit" value="Convertir a Centímetros">
    </form>
    <?php
    if (isset($_GET['pulgadas'])) {
        $pulgadas = floatval($_GET['pulgadas']);
        $centimetros = $pulgadas * 2.54; 
        echo "<div class='respuesta'>Resultado: <strong>" . $pulgadas . "</strong> pulgadas equivalen a <strong>" . round($centimetros, 2) . "</strong> centímetros.</div>";
    }
    ?>
</body>
</html>