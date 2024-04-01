<?php
echo"Hola Mundo"
//ejercicio 1
//comentamos con // o #
 //declaramos variables con $ 
$numero1 = 5;
$numero2 = 10;
$suma = $numero1 + $numero2;
echo "la suma de $numero1 y $numero2 es $suma";

//ejercicio 2
$numero = -5;
if ($numero > 0) {
echo "el numero es positivo";
} elseif ($numero < 0) {
    echo "el numero es negativo";
} else {
    echo "el numero es cero";
}

//ejercicio 3
for ($i = 1; $i <= 10; $i++){
    echo $i . "<br>";
}

//ejercicio 4
//crear un index.php
<form action="saludo.php" method="post">
    Nombre: <input type="text" name="nombre">
    <input type="submit">
</form>
    
//creamos un saludo.php
$nombre = $_POST['nombre'];
echo "Hola, $nombre!";

//ejercicio 1 definitivo
//crear un index.php
//crear formulario
//poner como titulo conversor de temperatura
//poner un p para instrucciones en el index
<form action="saludo.php" method="post">
    Ingrese la temperatura: <input type="text" name="nombre">
    <input type="submit">
</form>






?>
