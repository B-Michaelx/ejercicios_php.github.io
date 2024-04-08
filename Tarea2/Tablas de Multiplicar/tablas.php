<?php
$numero = $_POST['num'];
echo "Tabla de Multiplicación de $numero<br>";
echo "<ul>";
for ($i = 1; $i <= 10; $i++){
    $res = $numero * $i;
    echo "<li>$numero * $i = $res</li>";
}
echo "</ul>";

?>