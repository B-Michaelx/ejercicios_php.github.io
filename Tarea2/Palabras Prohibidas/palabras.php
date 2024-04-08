<?php
    if (isset($_POST['ingresar']) && isset($_POST['palabrasP'])) {
        $texto = $_POST['ingresar'];
        $palabras_prohibidas = explode(",", $_POST['palabrasP']);

        
        foreach ($palabras_prohibidas as $palabra) {
            $texto = str_ireplace(trim($palabra), '***', $texto);
        }

        echo "el nuevo texto con las palabras prohibidas es: $texto";
    }
?>