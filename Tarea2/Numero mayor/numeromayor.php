<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$num3 = $_POST['numero3'];

if ($num1 > $num2 && $num1 > $num3) {
    echo "el numero mayor es $num1.";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "el numero mayor es $num2.";
} elseif ($num3 > $num1 && $num3 > $num2) {
    echo "el numero mayor es $num3.";
} else {
    echo "los numeros son iguales.";
}
?>