<?php
function insertionSort($array) {
    // Recorremos el arreglo desde el segundo elemento
    for ($i = 1; $i < count($array); $i++) {
        // Guardamos el valor actual
        $currentValue = $array[$i];
        // Índice del elemento anterior
        $j = $i - 1;

        // Mover los elementos de la parte ordenada que son mayores que currentValue
        // hacia la derecha
        while ($j >= 0 && $array[$j] > $currentValue) {
            $array[$j + 1] = $array[$j];
            $j--;
        }

        // Insertar el valor actual en su posición correcta
        $array[$j + 1] = $currentValue;
    }

    return $array;
}

// Ejemplo de uso
$inputArray = [8, 4, 3, 7, 6, 5, 2, 1];
echo "Arreglo original:\n";
print_r($inputArray);

$sortedArray = insertionSort($inputArray);
echo "\nArreglo ordenado (Insertion Sort):\n";
print_r($sortedArray);
?>
