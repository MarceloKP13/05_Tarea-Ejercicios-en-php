<?php
echo "<h3>Ejercicio 5: Generar los primeros 10 números pares</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo $i * 2 . " ";
}

echo "<h3>Ejercicio 6: Calcular la suma de los primeros 100 números</h3>";
$suma = 0;
for ($i = 1; $i <= 100; $i++) {
    $suma += $i;
}
echo "La suma de los primeros 100 números es $suma.";

echo "<h3>Ejercicio 7: Mostrar una tabla de multiplicar</h3>";
$numero = 6;
for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}
?>