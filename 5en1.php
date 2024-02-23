<?php
//Tablas de multiplicar del 4 y del 6
echo "Tabla de multiplicar del 4:<br>";
for ($i = 1; $i <= 10; $i++) {
    $resultado4 = 4 * $i;
    echo "4 x $i = $resultado4<br>";
}

echo "<br>Tabla de multiplicar del 6:<br>";
for ($i = 1; $i <= 10; $i++) {
    $resultado6 = 6 * $i;
    echo "6 x $i = $resultado6<br>";
}

//Factorial de un número (Variable1)
$variable1 = 5; 
function calcularFactorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * calcularFactorial($n - 1);
    }
}

$factorial = calcularFactorial($variable1);
echo "<br>El factorial de $variable1 es: $factorial<br>";

//Si un número es primo o no(Variable2)
$variable2 = 7; 

function esPrimo($n) {
    if ($n <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

if (esPrimo($variable2)) {
    echo "$variable2 es un número primo.<br>";
} else {
    echo "$variable2 no es un número primo.<br>";
}

//número es par o no (Variable3)
$variable3 = 14; 
if ($variable3 % 2 == 0) {
    echo "$variable3 es un número par.<br>";
} else {
    echo "$variable3 no es un número par.<br>";
}

//Tablas de multiplicar de cualquier numero (Variable4)
$variable4 = 8; 
echo "<br>Tabla de multiplicar del $variable4:<br>";
for ($i = 1; $i <= 10; $i++) {
    $resultado4 = $variable4 * $i;
    echo "$variable4 x $i = $resultado4<br>";
}
?>
