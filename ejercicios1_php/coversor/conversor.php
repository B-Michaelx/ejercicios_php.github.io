<?php
$temperatura = $_POST['temp'];
$valor = 0; 
$dato = "";
$digitos = ['1','2','3','4','5','6','7','8','9','0','-', '.'];
for($i = 0; $i < strlen($temperatura); $i++){
    if(in_array($temperatura[$i], $digitos)) {
        $dato = $dato . $temperatura[$i];
    }elseif($temperatura[$i] == ' '){
        $i = $i + 3;
        if($temperatura[$i] == 'C' or 'c'){
            $valor = ($dato - 32) * 5/9;
            $valorformato = number_format($valor, 2);
            echo "$temperatura es equivalente a $valorformato °F";

        }elseif ($temperatura[$i] == 'F' or 'f'){
            $valor = ($dato * 9/5) + 32;
            $valorformato = number_format($valor, 2);
            echo "$temperatura es equivalente a $valorformato °C";
        }
    }
}
?>