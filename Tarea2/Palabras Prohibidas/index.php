<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Palabras Prohibidas</h1>
<p>Ingrese un texto</p>
    <form action="palabras.php" method="post">
        <label for="ingresar">Ingresar:</label>
        <input type="text" id="ingresar" name="ingresar" required>
        <br>
        <p>Elige las palabras que quieras prohibir</p>
        <label for="palabrasP">Palabras(separalas en comas):</label>
        <input type="text" id="palabrasP" name="palabrasP" required>
        <input type="submit" value="Reemplazar">
    </form>
</body>
</html>