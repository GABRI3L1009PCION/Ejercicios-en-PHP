<?php

$numero = 3; 

function calcularFactorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * calcularFactorial($n - 1);
    }
}

$factorial = calcularFactorial($numero);

echo "El factorial de $numero es: $factorial";
?>
