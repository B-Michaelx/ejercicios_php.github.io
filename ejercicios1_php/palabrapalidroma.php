<?php
$cadena = "Anita lava la tina";
$cadenalimpia = strtolower(str_replace([' ', '.',',','!'], '', $cadena)); //
$cadenainvertida = strrev($cadenalimpia);
if ($cadenalimpia == $cadenainvertida){
    echo "la cadena es palídromo";
} else{
    echo "la cadena no es palídromo";
}
?>