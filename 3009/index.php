<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <form action="calcular.php" method="POST">

        <label for="numero1">Numero 1:</label>
        <input type="number" name="numero1" id="numero1" required>

        <br><br>

        <label for="numero2">Numero 2:</label>
        <input type="number" name="numero2" id="numero2" required>

        <br><br>

        <label for="op">Operacao:</label>
        <input type="text" name="op" id="op">

        <br><br>

        <input type="submit" value="Calcular">

    </form>

</body>
</html>
