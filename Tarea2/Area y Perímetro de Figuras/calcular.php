<?php
$figura = $_POST["figura"];
$valores = $_POST["valores"];
$valor = $_POST["valor"];

    switch ($figura) {
        case "circulo":
            $area = pi() * pow($valores, 2);
            $perimetro = 2 * pi() * $valores;
            break;
        case "cuadrado":
            $area = pow($valores, 2);
            $perimetro = 4 * $valores;
            break;
        case "rectangulo":
            $area = $valores * $valor;
            $perimetro = 2 * ($valores + $valor);
            break;
        default:
            echo "<p>Error: Figura no válida.</p>";
    }  
    if (isset($area) && isset($perimetro)) {
        echo "Área: $area<br>";
        echo "Perímetro: $perimetro";
    }
    ?>