<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calculadora de Figuras Geométricas</h1>
<p>Calcula el area y el perimetro</p>
<p>La altura la necesitaras para el rectángulo</p>
    <form action="calcular.php" method="post">
        <label for="figura">Selecciona una figura:</label>
        <select name="figura" id="figura">
            <option value="circulo">Círculo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
        </select>
        <br>
        <label for="valores">Radio, lado o base:</label>
        <input type="number" name="valores" id="valores" step="0.01" required>
        <br>
        <label for="valor">Altura (rectangulo):</label>
        <input type="number" name="valor" id="valor" step="0.01">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>