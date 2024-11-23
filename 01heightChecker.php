<?php
function heightChecker($heights) {
    // Clonar el arreglo y ordenarlo para obtener el arreglo 'expected'
    $expected = $heights;
    sort($expected);

    // Contador para diferencias
    $differences = 0;

    // Comparar ambos arreglos
    for ($i = 0; $i < count($heights); $i++) {
        if ($heights[$i] != $expected[$i]) {
            $differences++;
        }
    }

    // Retornar el número de diferencias
    return $differences;
}

// Ejemplo de uso
$heights = [1, 1, 4, 2, 1, 3];
echo "Número de índices diferentes: " . heightChecker($heights);
?>
