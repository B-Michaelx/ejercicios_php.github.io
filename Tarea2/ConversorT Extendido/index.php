<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Conversor De Temperatura Extendido</h1>
    <p>Ingrese la temperatura a convertir:</p>
    <form action="conversorT.php" method="post"> Temperatura:
        <input type="number" name="temp">
        <br><br>
        Convertir:
        <select name="from">
            <option value="cel">Celsius</option>
            <option value="faren">Fahrenheit</option>
            <option value="kel">Kelvin</option>
        </select>
        a:
        <select name="to">
            <option value="faren">Fahrenheit</option>
            <option value="kel">Kelvin</option>
            <option value="cel">Celsius</option>
        </select>
        <br><br>
        <input type="submit" value="Convertir">
    </form>
</body>
</html>
