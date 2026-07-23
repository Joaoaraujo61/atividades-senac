<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include "conexao.php";

        $id = (int) $_GET['id'];

        $sql = "SELECT * FROM livros WHERE id=$id";
        $resultado = $conexao->query($sql);
        $livro = $resultado->fetch_assoc();
        mysqli_close($conexao);
    
    ?>
<div class="container">

    <h2>Editar Livro</h2>

    <form action="editar.php?id=<?php echo $id ?>" method="POST">

        <div class="form-grid">

            <div class="campo campo-full">
                <label>Título</label>
                <input type="text" name="titulo" value=<?php echo $livro['titulo']?> required>
            </div>

            <div class="campo">
                <label>Autor</label>
                <input type="text" name="autor" value=<?php echo $livro['autor']?> required>
            </div>

            <div class="campo">
                <label>Editora</label>
                <input type="text" name="editora" value=<?php echo $livro['editora']?> required>
            </div>

            <div class="campo">
                <label>Ano de Publicação</label>
                <input type="number" name="ano_publicacao" value=<?php echo $livro['ano_publicacao']?> required>
            </div>

            <div class="campo">
                <label>Quantidade</label>
                <input type="number" name="quantidade" min="1" value=<?php echo $livro['quantidade']?> required>
            </div>

        </div>

        <div class="botoes">
            <button type="submit">Confirmar</button>

            <a href="listarLivros.php" class="btn-listar">
                Listar Livros
            </a>
        </div>

    </form>

</div>


</body>
</html>