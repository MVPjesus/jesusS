<?php

// Función para calcular el promedio de 3 notas
function calcularPromedio($nota1, $nota2, $nota3) {
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    return $promedio;
}

// Definimos las notas
$nota11111111111111111111 = 8.5;
$nota2 = 7.2;
$nota3 = 6.9;

// Llamamos a la función y mostramos el resultado
$resultado = calcularPromedio($nota1, $nota2, $nota3);
echo "El promedio de las notas $nota1, $nota2 y $nota3 es: " . number_format($resultado, 2);

?>
