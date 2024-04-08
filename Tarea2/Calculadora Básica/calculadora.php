<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];

if ($operacion == "suma"){
    $resultado = $num1 + $num2;
}elseif($operacion == "resta"){
    $resultado = $num1 - $num2;
}elseif($operacion == "multiplicacion"){
    $resultado = $num1 * $num2;
}elseif($operacion == "division"){
    if($num2 != 0){
        $resultado = $num1 / $num2; 
    }else {
        echo "¡No se puede dividir por cero!";
    }
}
if (isset($resultado)){
    echo "el resultado es $resultado";
}
?>