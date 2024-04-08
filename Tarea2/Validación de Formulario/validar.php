<?php
$Edad = $_POST["edad"];

if ($Edad >= 18) {
    echo "<p style='color: green;'>Eres mayor de edad, puedes ingresar";
} else {
    echo "<p style='color: red;'>Lo siento no puedes ingresar, debes tener 18 años o más";
 }
?>