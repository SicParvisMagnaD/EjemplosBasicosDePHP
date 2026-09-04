<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio - Calculadora</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f0f2f5; color: #333; max-width: 500px; margin: 40px auto; padding: 30px; background: #fff; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h1 { color: #0056b3; text-align: center; margin-bottom: 25px; }
        label { font-weight: bold; font-size: 14px; color: #444; }
        small { color: #777; font-style: italic; display: block; margin-bottom: 15px; }
        input[type="number"], select { width: 100%; padding: 10px; margin: 5px 0 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; background-color: #17a2b8; color: white; padding: 12px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; font-weight: bold; margin-top: 10px; }
        button:hover { background-color: #138496; }
        hr { border: 0; border-top: 1px solid #eee; margin: 25px 0; }
        .resultado { text-align: center; padding: 15px; background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; border-radius: 4px; font-size: 18px; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form method="POST" action="">
        <label>Número 1:</label>
        <input type="number" step="any" name="num1" required>

        <label>Número 2:</label>
        <input type="number" step="any" name="num2" required>
        <small>(Se usa para sumar, restar y multiplicar)</small>

        <label>Decimales a redondear:</label>
        <input type="number" name="decimales" value="2" min="0">
        <small>(Se usa solo para la opción "Redondear")</small>

        <label>Operación:</label>
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="redondear">Redondear (usa solo Número 1)</option>
        </select>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<hr>";
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $decimales = intval($_POST['decimales']);
        $operacion = $_POST['operacion'];
        $resultado = "";

        echo "<div class='resultado'>";
        switch ($operacion) {
            case "sumar":
                $resultado = $num1 + $num2;
                echo "Suma: $num1 + $num2 = $resultado";
                break;
            case "restar":
                $resultado = $num1 - $num2;
                echo "Resta: $num1 - $num2 = $resultado";
                break;
            case "multiplicar":
                $resultado = $num1 * $num2;
                echo "Multiplicación: $num1 &times; $num2 = $resultado";
                break;
            case "redondear":
                $resultado = round($num1, $decimales);
                echo "Redondeo: $num1 redondeado a $decimales decimales = $resultado";
                break;
            default:
                echo "Operación no reconocida.";
        }
        echo "</div>";
    }
    ?>
</body>
</html>