<?php

// Definimos las notas en un arreglo
$notas = [8.5, 7.2, 6.9];

// Calculamos el promedio utilizando la función array_sum para sumar los elementos del arreglo
$promedio = array_sum($notas) / count($notas);

// Mostramos el resultado
echo "El promedio de las notas sssssssss" . implode(", ", $notas) . " es: " . number_format($promedio, 2);

?>
