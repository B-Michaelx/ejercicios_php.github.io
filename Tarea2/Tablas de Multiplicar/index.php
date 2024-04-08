<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tabla de Multiplicar</h1>
<p>Ingrese un numero</p>
<p>para generar su respectiva tabla por el que se multiplicará</p>
    <form action="tablas.php" method="post">
        <label for="num">Ingresar:</label>
        <input type="number" name="num" id="num" required>
        <input type="submit" value="Tabla">
    </form>
</body>
</html>