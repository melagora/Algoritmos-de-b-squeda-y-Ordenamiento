<?php
function binarySearch($nums, $target) {
    $left = 0; // Límite inferior
    $right = count($nums) - 1; // Límite superior

    while ($left <= $right) {
        // Calcular el punto medio
        $mid = intval(($left + $right) / 2);

        if ($nums[$mid] == $target) {
            // Si el elemento medio es igual al objetivo, retornar su índice
            return $mid;
        } elseif ($nums[$mid] < $target) {
            // Si el elemento medio es menor que el objetivo, buscar en la mitad derecha
            $left = $mid + 1;
        } else {
            // Si el elemento medio es mayor que el objetivo, buscar en la mitad izquierda
            $right = $mid - 1;
        }
    }

    // Si no se encuentra el objetivo, retornar -1
    return -1;
}

// Ejemplo de uso
$nums = [-10, -3, 0, 5, 9, 12];
$target = 9;

$result = binarySearch($nums, $target);

// Imprimir el resultado
if ($result != -1) {
    echo "El objetivo $target se encuentra en el índice: $result\n";
} else {
    echo "El objetivo $target no está en el arreglo.\n";
}
?>
