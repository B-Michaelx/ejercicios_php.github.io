<?php
if(isset($_POST['temp']) && isset($_POST['from']) && isset($_POST['to'])) {
    $temperatura = $_POST['temp'];
    $dato1 = $_POST['from'];
    $dato2 = $_POST['to'];

    switch ($dato1) {
        case 'cel':
            switch ($dato2) {
                case 'faren':
                $resultado = ($temperatura * 9 / 5) + 32;
                echo "$temperatura °C es igual a: $resultado °F";
                break;
                case 'kel':
                $resultado = $temperatura + 273.15;
                echo "$temperatura °C es igual a: $resultado °K";
                break;
                default:
                echo "Selecciona uno diferente al mismo.";
            }
            break;
        case 'faren':
            switch ($dato2) {
                case 'cel':
                $resultado1 = ($temperatura - 32) * (5 / 9);
                echo "$temperatura °F es igual a: $resultado1 °C";
                break;
                case 'kel':
                $resultado1 = ($temperatura + 459.67) * 5/9;
                echo "$temperatura °F es igual a: $resultado1 °K";
                break;
                default:
                echo "Selecciona uno diferente al mismo.";
            }
          break;
        case 'kel':
            switch ($dato2) {
                case 'cel':
                $resultado2 = $temperatura - 273.15;
                echo "$temperatura °K es igual a: $resultado2 °C";
                break;
                case 'faren':
                $resultado2 = ($temperatura * 9/5) - 459.67;
                echo "$temperatura °K es igual a: $resultado2 °F";
                break;
                default:
                echo "Selecciona uno diferente al mismo.";
            }
           break;
       
    }
} 
?>