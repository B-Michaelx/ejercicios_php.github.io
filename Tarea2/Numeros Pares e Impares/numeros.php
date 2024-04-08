<?php
    $Pares = [];
    $Impares = [];

    for ($i = 1; $i <= 40; $i++) {
        if ($i % 2 == 0) {
            $Pares[] = $i;
        } else {
            $Impares[] = $i;
        }
    }

    echo "<p style='color: green;'>Números Pares:";
    foreach ($Pares as $par) {
        echo "<li>$par</li>";
    }
    echo "<p style='color: green;'>Números Impares:";
    foreach ($Impares as $impar) {
        echo "<li>$impar</li>";
    }
    ?>