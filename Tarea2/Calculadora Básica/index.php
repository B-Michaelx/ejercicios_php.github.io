<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calculadora</h1>
<p>Bienvenido, aqui puedes calcular operaciones básicas</p>
    <form action="calculadora.php"method="post">
        <label for="num1">Primer número:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Segundo número:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicacion">Multiplicar</option>
            <option value="division">Dividir</option>
        </select>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>