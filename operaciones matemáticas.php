//Practica 2 <br><br>

<?php

//1. Suma
$num1 = 4;
$num2 = 7;
$suma = $num1 + $num2;
echo "1. La suma de $num1 y $num2 es : $suma<br><br>"; 
//La suma de 4 y 7 es: 11

//2. Resta
$num1 = 10;
$num2 = 3;
$resta = $num1 - $num2;
echo "2. La resta de $num1 y $num2 es: $resta<br><br>";
//a resta de 10 y 3 es: 7

//3. Multiplicación
$num1 = 5;
$num2 = 6;
$multiplicacion = $num1 * $num2;
echo "3. La multiplicación de $num1 y $num2 es: $multiplicacion<br><br>";
//La multiplicación de 5 y 6 es: 30

//4. División
$num1 =20;
$num2 = 4;
$division = $num1 / $num2;
echo "4. La división de $num1 y $num2 es: $division<br><br>";
//La división de 20 y 4 es: 5

//5.Potenciación
$base = 2; 
$exponente = 3;
$potencia = $base ** $exponente;
echo "5. La potencia de $base elevado a $exponente es : $potencia <br><br>";
//La potencia de 2 elevado a 3 es: 8

//6. Modulo
$num1 = 15;
$num2 = 4;
$modulo = $num1 % $num2;
echo "6. El módulo de $num1 y $num2 es: $modulo<br><br>";
//El módulo de 15 y 4 es: 3

//7. Redondeo
$numero = 4.6;

$redondeado = round($numero);
$redondeado_arriba = ceil($numero);
$redondeado_abajo = floor($numero);
echo "7. Redondeo<br>";
echo "El número redondeado es: $redondeado<br>"; // El número redondeado es: 5
echo "El número redondeado hacia arriba es: $redondeado_arriba<br>"; 
// El número redondeado haciaarriba es: 5

echo "El número redondeado hacia abajo es: $redondeado_abajo<br><br>"; 
// El número redondeado hacia abajo es: 4


//8. Operador módulo % con signos
echo "8. Operador módulo %<br>";
echo (5 % 3) . "<br>";
echo (-5 % 3) . "<br>";
echo (5 % -3) . "<br>";
echo (-5 % -3) . "<br><br>";

//9. Valor absoluto: abs()
$numero = -7;
$valor_absoluto = abs($numero);
echo "9. El valor absoluto de $numero es: $valor_absoluto<br>";


?>
