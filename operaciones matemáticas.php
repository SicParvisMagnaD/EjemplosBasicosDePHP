<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones Matemáticas</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f9f9f9; color: #333; max-width: 600px; margin: 40px auto; padding: 20px 30px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h2 { color: #0056b3; margin-top: 30px; font-size: 18px; border-bottom: 1px solid #eee; padding-bottom: 5px; }
        .box { background: #f4f4f4; padding: 10px 15px; border-left: 4px solid #0056b3; margin-bottom: 10px; border-radius: 0 4px 4px 0; }
    </style>
</head>
<body>
    <h1>Práctica 2 - Operaciones</h1>
    <?php
    echo "<h2>1. Suma</h2><div class='box'>";
    $num1 = 4; $num2 = 7; $suma = $num1 + $num2;
    echo "La suma de $num1 y $num2 es: <strong>$suma</strong></div>";

    echo "<h2>2. Resta</h2><div class='box'>";
    $num1 = 10; $num2 = 3; $resta = $num1 - $num2;
    echo "La resta de $num1 y $num2 es: <strong>$resta</strong></div>";

    echo "<h2>3. Multiplicación</h2><div class='box'>";
    $num1 = 5; $num2 = 6; $multiplicacion = $num1 * $num2;
    echo "La multiplicación de $num1 y $num2 es: <strong>$multiplicacion</strong></div>";

    echo "<h2>4. División</h2><div class='box'>";
    $num1 = 20; $num2 = 4; $division = $num1 / $num2;
    echo "La división de $num1 y $num2 es: <strong>$division</strong></div>";

    echo "<h2>5. Potenciación</h2><div class='box'>";
    $base = 2; $exponente = 3; $potencia = $base ** $exponente;
    echo "La potencia de $base elevado a $exponente es: <strong>$potencia</strong></div>";

    echo "<h2>6. Módulo</h2><div class='box'>";
    $num1 = 15; $num2 = 4; $modulo = $num1 % $num2;
    echo "El módulo de $num1 y $num2 es: <strong>$modulo</strong></div>";

    echo "<h2>7. Redondeo</h2><div class='box'>";
    $numero = 4.6;
    echo "Número original: $numero<br>";
    echo "Redondeado: <strong>" . round($numero) . "</strong><br>";
    echo "Hacia arriba: <strong>" . ceil($numero) . "</strong><br>";
    echo "Hacia abajo: <strong>" . floor($numero) . "</strong></div>";

    echo "<h2>8. Operador módulo % con signos</h2><div class='box'>";
    echo "(5 % 3) = " . (5 % 3) . "<br>";
    echo "(-5 % 3) = " . (-5 % 3) . "<br>";
    echo "(5 % -3) = " . (5 % -3) . "<br>";
    echo "(-5 % -3) = " . (-5 % -3) . "</div>";

    echo "<h2>9. Valor absoluto</h2><div class='box'>";
    $numero = -7; $valor_absoluto = abs($numero);
    echo "El valor absoluto de $numero es: <strong>$valor_absoluto</strong></div>";
    ?>
</body>
</html>