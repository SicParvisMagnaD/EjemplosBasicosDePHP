<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio - Calculadora</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; color: #333; }
        h1 { color: #2b4c7e; }
        select, input[type="number"] { padding: 5px; }
        button { padding: 6px 16px; }
    </style>
</head>
<body>

    <h1>Calculadora en PHP</h1>

    <form method="POST" action="">
        Número 1: <input type="number" step="any" name="num1" required><br><br>
        Número 2: <input type="number" step="any" name="num2" required>
        <small>(solo se usa para sumar, restar y multiplicar)</small><br><br>

        Decimales a redondear: <input type="number" name="decimales" value="2" min="0">
        <small>(solo se usa para la opción "Redondear")</small><br><br>

        Operación:
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="redondear">Redondear (usa solo Número 1)</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>

    <hr>

    <?php
    // solo entramos aquí si ya enviaron el formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // pasamos todo a número para no tener problemas con texto raro
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $decimales = intval($_POST['decimales']);
        $operacion = $_POST['operacion'];

        $resultado = "";

        // según la operación elegida hacemos el cálculo correspondiente
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
                echo "Multiplicación: $num1 * $num2 = $resultado";
                break;

            case "redondear":
                $resultado = round($num1, $decimales);
                echo "Redondeo: $num1 redondeado a $decimales decimales = $resultado";
                break;

            default:
                echo "Operación no reconocida.";
        }
    }
    ?>

</body>
</html>