<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Cadastro de Livros</h2>

    <form action="cadastrar.php" method="POST">

        <div class="form-grid">

            <div class="campo campo-full">
                <label>Título</label>
                <input type="text" name="titulo" required>
            </div>

            <div class="campo">
                <label>Autor</label>
                <input type="text" name="autor" required>
            </div>

            <div class="campo">
                <label>Editora</label>
                <input type="text" name="editora" required>
            </div>

            <div class="campo">
                <label>Ano de Publicação</label>
                <input type="number" name="ano_publicacao" required>
            </div>

            <div class="campo">
                <label>Quantidade</label>
                <input type="number" name="quantidade" min="1" required>
            </div>

        </div>

        <div class="botoes">
            <button type="submit">Cadastrar Livro</button>

            <a href="listarLivros.php" class="btn-listar">
                Listar Livros
            </a>
        </div>

    </form>

</div>

</body>
</html>