<?php
$contarpalabras = $_POST['palabra'];
$palabras = explode(" ", $contarpalabras);
$numpalabras = count($palabras); 
echo "La cantidad de palabras en la cadena es: " . $numpalabras;

?>