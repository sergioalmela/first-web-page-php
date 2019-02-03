<?php
$num1 = 3;
$num2 = 6;
$suma = $num1+$num2;

echo "La suma de $num1 y $num2 es: $suma";
echo "<br>";

$num1 = 'Palabra1';
$num2 = 'Palabra2';
$suma = $num1+$num2;

echo "Una suma de dos String será de cero: $suma";
echo "<br>";

$num1 = 1;
echo "Convertimos el número a negativo: ".-$num1;
echo "<br>";

echo "Comprobamos que el número sea un Int";
echo "<br>";
var_dump(-$num1);
echo "<br>";

$num1 = 3;
$num2 = 6;
$multiplicacion = $num1*$num2;

echo "La multiplicación de $num1 y $num2 es de ($multiplicacion)";
echo "<br>";

echo "Sumamos un valor a la variable que tiene el valor $num1: ";
$num1 = $num1 +1;
//Equivalente: $num1++
echo $num1;
echo "<br>";

echo "Restamos dos valores a la variable que tiene el valor $num1: ";
$num1 = $num1 -2;
//Equivalente: $num1--
echo $num1;
?>