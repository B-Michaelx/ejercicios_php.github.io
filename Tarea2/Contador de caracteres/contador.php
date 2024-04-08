<?php
    $ingreso = $_POST['ingresar']; 

    $eliminar_espacios = str_replace(' ','',$ingreso); 
    $caracteres = strlen($eliminar_espacios); 
    
    echo "la cantidad de caracteres en el texto es $caracteres"; 
?>