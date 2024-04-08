<?php
    $longitud = intval($_POST['longitud']);

    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+[]{}|;:,.<>?';
    $contrasena = ''; 

    for ($i = 0; $i < $longitud; $i++){
        $datos = random_int(0, strlen($caracteres)-1);
        $contrasena .= $caracteres[$datos];
    }
    echo "tu contraseña es: $contrasena";
?> 