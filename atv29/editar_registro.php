<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include "conexao.php";

        $id = (int) $_GET['id'];

        $sql = "SELECT * FROM produtos WHERE id=$id";
        $resultado = $conexao->query($sql);
        $dado = $resultado->fetch_assoc();
        mysqli_close($conexao);
    
    ?>
<div class="container">

    <h2>Editar Registro</h2>

    <form action="editar.php?id=<?php echo $id ?>" method="POST">

        <div class="form-grid">

            <div class="campo campo-full">
                <label>Nome</label>
                <input type="text" name="nome" value="<?php echo $dado['nome']?>" required>
            </div>

            <div class="campo">
                <label>Categoria</label>
                <input type="text" name="categoria" value="<?php echo $dado['categoria']?>" required>
            </div>

            <div class="campo">
                <label>Quantidade</label>
                <input type="number" name="quantidade" value="<?php echo $dado['quantidade']?>" required>
            </div>

            <div class="campo">
                <label>Preço</label>
                <input type="number" name="preco" value="<?php echo $dado['preco']?>" required>
            </div>

            <div class="campo">
                <label>Entrega</label>
                <input type="date" name="entrega" value="<?php echo $dado['entrega']?>" required>
            </div>
        </div>

        <div class="botoes">
            <button type="submit">Confirmar</button>

            <a href="listar.php" class="btn-listar">
                Listar Registros
            </a>
        </div>

    </form>

</div>


</body>
</html>