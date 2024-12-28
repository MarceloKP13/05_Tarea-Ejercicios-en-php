<?php
echo "<h3>Ejercicio 1: Verificar si un número es par o impar</h3>";
$numero = 15;
if ($numero % 2 == 0) {
    echo "$numero es par.";
} else {
    echo "$numero es impar.";
}

echo "<h3>Ejercicio 2: Encontrar el mayor de dos números</h3>";
$a = 10;
$b = 20;
if ($a > $b) {
    echo "$a es mayor que $b.";
} elseif ($a < $b) {
    echo "$b es mayor que $a.";
} else {
    echo "$a y $b son iguales.";
}

echo "<h3>Ejercicio 3: Determinar si un número es positivo, negativo o cero</h3>";
$numero = -5;
if ($numero > 0) {
    echo "$numero es positivo.";
} elseif ($numero < 0) {
    echo "$numero es negativo.";
} else {
    echo "$numero es cero.";
}

echo "<h3>Ejercicio 4: Determinar si un número es positivo, negativo o cero</h3>";
$numero = 25;
$min = 10;
$max = 50;

if ($numero >= $min && $numero <= $max) {
    echo "$numero está dentro del rango de $min a $max.";
} else {
    echo "$numero está fuera del rango de $min a $max.";
}
?>