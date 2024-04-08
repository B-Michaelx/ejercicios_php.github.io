<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Verifica tu Edad</h1>
<p>Ingresa tu edad</p>
    <form action="validar.php" method="post">
        <label for="edad">Ingresar:</label>
        <input type="number" name="edad" id="edad" required>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>