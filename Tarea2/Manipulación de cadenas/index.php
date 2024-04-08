<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Manupulación de Textos</h1>
<p>Ingresa una cadena de texto y te lo mostrará en:</p>
<p>Mayusculas, Minusculas y cuantos Caracteres contiene</p>
    <form action="manipulacion.php" method="post">
        <label for="cadena">Ingresr cadena:</label>
        <input type="text" name="cadena" id="cadena" required>
        <input type="submit" value="Ver resulato">
    </form>
</body>
</html>