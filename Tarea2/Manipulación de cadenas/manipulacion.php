<?php
$cadena = $_POST['cadena'];

$mayuscula = strtoupper($cadena);
$minuscula = strtolower($cadena);
$longitud = strlen($cadena); 

echo "Cadena en mayúsculas: $mayuscula<br>";
echo "Cadena en minúsculas: $minuscula<br>";
echo "Longitud de cadena: $longitud";

?>