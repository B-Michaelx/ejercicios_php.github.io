<?php
    $nombre = $_POST["nombre"];
    
    $opcion = rand(0, 1);
    
    if ($opcion == 0) {
        echo "<p style='color: green;'>¡Felicidades $nombre  Has ganado el sorteo.";
    } else {
        echo "<p style='color: red;'>lo sentimos, $nombre ganaras en otra ocasión.";
    }
?>