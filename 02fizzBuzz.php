<?php
function fizzBuzz($n) {
    $answer = [];

    // Iterar desde 1 hasta n
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            // Si es divisible entre 3 y 5
            $answer[] = "FizzBuzz";
        } elseif ($i % 3 == 0) {
            // Si es divisible entre 3
            $answer[] = "Fizz";
        } elseif ($i % 5 == 0) {
            // Si es divisible entre 5
            $answer[] = "Buzz";
        } else {
            // Si no cumple ninguna condición
            $answer[] = (string)$i;
        }
    }

    return $answer;
}

// Ejemplo de uso
$n = 16;
$result = fizzBuzz($n);

// Imprimir el resultado
echo "Resultado de Fizz Buzz para n=$n:\n";
print_r($result);
?>
