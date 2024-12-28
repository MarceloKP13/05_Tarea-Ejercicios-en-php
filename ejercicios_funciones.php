<?php
echo "<h1>Ejercicios con Funciones en PHP</h1>";

echo "<h3>Ejercicio 1: Función para sumar dos números</h3>";
function suma($a, $b) {
    return $a + $b;
}
echo "La suma de 5 y 10 es: " . suma(5, 10) . "<br>";

echo "<h3>Ejercicio 2: Función para determinar si un número es primo</h3>";
function esPrimo($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
echo "El número 7 " . (esPrimo(7) ? "es primo" : "no es primo") . "<br>";

echo "<h3>Ejercicio 3: Función para calcular el área de un rectángulo</h3>";
function areaRectangulo($base, $altura) {
    return $base * $altura;
}
echo "El área de un rectángulo con base 5 y altura 10 es: " . areaRectangulo(5, 10) . "<br>";

echo "<h3>Ejercicio 4: Función para calcular el factorial (recursiva)</h3>";
function factorial($n) {
    if ($n == 0) return 1;
    return $n * factorial($n - 1);
}
echo "El factorial de 5 es: " . factorial(5) . "<br>";

echo "<h3>Ejercicio 5: Función para determinar si una palabra es un palíndromo</h3>";
function esPalindromo($palabra) {
    $palabra = strtolower(str_replace(' ', '', $palabra));
    return $palabra === strrev($palabra);
}
echo "'anita lava la tina' " . (esPalindromo("anita lava la tina") ? "es palíndromo" : "no es palíndromo") . "<br>";

echo "<h3>Ejercicio 6: Función para encontrar el mayor de tres números</h3>";
function mayorDeTres($a, $b, $c) {
    return max($a, $b, $c);
}
echo "El mayor de 3, 7 y 5 es: " . mayorDeTres(3, 7, 5) . "<br>";

echo "<h3>Ejercicio 7: Función para convertir grados Celsius a Fahrenheit</h3>";
function celsiusAFahrenheit($celsius) {
    return ($celsius * 9 / 5) + 32;
}
echo "25 grados Celsius son: " . celsiusAFahrenheit(25) . " Fahrenheit<br>";

echo "<h3>Ejercicio 8: Función para contar las vocales en una cadena</h3>";
function contarVocales($cadena) {
    $vocales = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    foreach (str_split(strtolower($cadena)) as $letra) {
        if (in_array($letra, $vocales)) $contador++;
    }
    return $contador;
}
echo "La cadena 'Hola Mundo' tiene " . contarVocales("Hola Mundo") . " vocales.<br>";

echo "<h3>Ejercicio 9: Función para calcular el promedio de un array de números</h3>";
function promedioArray($numeros) {
    return array_sum($numeros) / count($numeros);
}
echo "El promedio de [5, 10, 15] es: " . promedioArray([5, 10, 15]) . "<br>";

echo "<h3>Ejercicio 10: Función para invertir una cadena de texto</h3>";
function invertirCadena($texto) {
    return strrev($texto);
}
echo "La cadena invertida de 'Hola Mundo' es: " . invertirCadena("Hola Mundo") . "<br>";
?>