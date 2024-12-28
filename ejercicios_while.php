<?php
echo "<h3>Ejercicio 8: Calcular el factorial de un número</h3>";
$numero = 5;
$factorial = 1;
while ($numero > 0) {
    $factorial *= $numero;
    $numero--;
}
echo "El factorial es $factorial.";

echo "<h3>Ejercicio 9: Imprimir los números del 1 al 50</h3>";
$i = 1;
while ($i <= 50) {
    echo $i . " ";
    $i++;
}

echo "<h3>Ejercicio 10: Contar los dígitos de un número</h3>";
$numero = 12345;
$contador = 0;
while ($numero > 0) {
    $numero = (int)($numero / 10);
    $contador++;
}
echo "El número tiene $contador dígitos.";
?>