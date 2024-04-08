<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$val1 = floatval($peso);
$val2 = floatval($altura);
$masaC = $val1/($val2**2);
$decimal = number_format($masaC, 2);
echo "tu IMC es de $decimal kg/m^2";
?>