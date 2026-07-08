
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Multiplicação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Multiplicação</h1>
        <form action="resultado.php" method="post">
            <label for="numero1">Primeiro número:</label>
            <input type="number" step="any" id="numero1" name="numero1" required>

            <label for="numero2">Segundo número:</label>
            <input type="number" step="any" id="numero2" name="numero2" required>

             <label for="numero2">Terceiro número:</label>
            <input type="number" step="any" id="numero3" name="numero3" required>

            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>
