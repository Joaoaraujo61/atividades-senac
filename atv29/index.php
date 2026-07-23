<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Cadastro</h2>

    <form action="cadastrar.php" method="POST">

        <div class="form-grid">

             <div class="campo campo-full">
                <label>Nome</label>
                <input type="text" name="nome" required>
            </div>

            <div class="campo">
                <label>Categoria</label>
                <input type="text" name="categoria" required>
            </div>

            <div class="campo">
                <label>Quantidade</label>
                <input type="number" name="quantidade" required>
            </div>

            <div class="campo">
                <label>Preço</label>
                <input type="number" name="preco" required>
            </div>

            <div class="campo">
                <label>Entrega</label>
                <input type="date" name="entrega" required>
            </div>
        </div>

        <div class="botoes">
            <button type="submit">Cadastrar</button>

            <a href="listar.php" class="btn-listar">
                Listar Registros
            </a>
        </div>

    </form>

</div>

</body>
</html>