<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio - Calculadora</title>
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
    // Solo entramos aquí si el formulario ya fue enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Convertimos los datos del formulario a números.
        // floatval() asegura que trabajemos con números decimales,
        // aunque el usuario haya escrito texto raro por error.
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $decimales = intval($_POST['decimales']); // intval = número entero
        $operacion = $_POST['operacion'];

        $resultado = "";

        // switch es como una cadena de "if / else if" pero más ordenada
        // cuando comparamos una misma variable contra varios valores posibles.
        switch ($operacion) {

            case "sumar":
                $resultado = $num1 + $num2;
                echo "Suma: $num1 + $num2 = $resultado";
                break; // break = "termina aquí, no sigas revisando los demás case"

            case "restar":
                $resultado = $num1 - $num2;
                echo "Resta: $num1 - $num2 = $resultado";
                break;

            case "multiplicar":
                $resultado = $num1 * $num2;
                echo "Multiplicación: $num1 * $num2 = $resultado";
                break;

            case "redondear":
                // round() recibe el número y la cantidad de decimales deseados
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