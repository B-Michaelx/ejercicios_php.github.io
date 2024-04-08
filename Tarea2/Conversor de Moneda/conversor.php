<?php
$dollar = $_POST['dollar'];

$tasa = (779)/100;
$quetzales = $dollar * $tasa;
echo "la cantidad de dollares a quetzales es de $quetzales";
?>