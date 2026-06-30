
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma de Dois Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Soma de Dois Números</h1>
        <form action="resultado.php" method="post">
            <label for="numero1">Primeiro número:</label>
            <input type="number" step="any" id="numero1" name="numero1" required>

            <label for="numero2">Segundo número:</label>
            <input type="number" step="any" id="numero2" name="numero2" required>

            <button type="submit">Somar</button>
        </form>
    </div>
</body>
</html>
