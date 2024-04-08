<?php
    $valor = intval($_POST['anio']); 

    if (($valor % 4 == 0 && $valor % 100 != 0) || $valor % 400 == 0){
        echo "$valor es un año bisiesto";
    } else {
        echo "$valor no es un año bisiesto";  
    }
?>