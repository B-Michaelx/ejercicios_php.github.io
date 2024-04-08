<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Conversor De modenas</h1>
<p>Ingresa la cantidad de dollares a convertir</p>
    <form action="conversor.php" method="post">
        <label for="dollar">Cantidad ($):</label>
        <input type="number" name="dollar" id="dollar" step="0.01" required>
        <input type="submit" value="Convertir a Q">
    </form>
</body>
</html>