<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio #1</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; color: #333; }
        h1, h2 { color: #2b4c7e; }
        input[type="number"] { padding: 5px; }
        input[type="submit"] { padding: 6px 16px; }
    </style>
</head>
<body>

     <!--  EJERCICIO 1: Área y Perímetro (radio fijo) -->
    <h1>Ejercicio 1: El área y perímetro de un círculo</h1>
    <?php
        $r = 5; // uso un radio fijo para probar
        $area = M_PI * pow($r, 2);
        $perimetro = 2 * M_PI * $r;
        echo "Área = " . round($area, 2) . "<br><br>";
        echo "Perímetro = " . round($perimetro, 2) . "<br>";
    ?>

    <hr>


     <!-- EJERCICIO 2: Área de la Circunferencia (con formulario) -->
    <h2>Ejercicio 2: Cálculo del área de una circunferencia</h2>
    <form method="GET" action="">
        <label for="radio">Introduzca el radio (dato real):</label><br>
        <input type="number" step="any" name="radio" id="radio" required><br><br>
        <input type="submit" value="Calcular Área">
    </form>
    <?php
    // solo calculamos si ya mandaron el radio
    if (isset($_GET['radio'])) {
        $radio = floatval($_GET['radio']);
        $area2 = M_PI * pow($radio, 2);
        echo "El área de la circunferencia es: " . round($area2, 2) . "<br>";
    }
    ?>

    <hr>

     <!-- EJERCICIO 3: Pulgadas a Centímetros (con formulario) -->
    <h2>Ejercicio 3: Convertir pulgadas a centímetros</h2>
    <form method="GET" action="">
        <label for="pulgadas">Leer las pulgadas:</label><br>
        <input type="number" step="any" name="pulgadas" id="pulgadas" required><br><br>
        <input type="submit" value="Convertir a Centímetros">
    </form>
    <?php
    if (isset($_GET['pulgadas'])) {
        $pulgadas = floatval($_GET['pulgadas']);
        $centimetros = $pulgadas * 2.54; // 1 pulgada = 2.54 cm
        echo "Resultado: " . $pulgadas . " pulgadas equivalen a " . round($centimetros, 2) . " centímetros.<br>";
    }
    ?>

</body>
</html>