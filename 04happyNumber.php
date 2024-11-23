<?php
function isHappy($n) {
    $seen = []; // Almacenar números ya vistos para evitar bucles

    while ($n != 1) {
        if (isset($seen[$n])) {
            // Si el número ya fue visto, hay un ciclo
            return false;
        }

        $seen[$n] = true; // Marcar el número como visto
        $n = sumOfSquares($n); // Calcular la suma de los cuadrados de los dígitos
    }

    return true; // Si se llega al 1, es un número feliz
}

function sumOfSquares($num) {
    $sum = 0;

    while ($num > 0) {
        $digit = $num % 10; // Obtener el último dígito
        $sum += $digit * $digit; // Sumar el cuadrado del dígito
        $num = intval($num / 10); // Eliminar el último dígito
    }

    return $sum;
}

// Ejemplo de uso
$n = 19;
$result = isHappy($n);

// Imprimir el resultado
if ($result) {
    echo "$n es un número feliz.\n";
} else {
    echo "$n no es un número feliz.\n";
}
?>
