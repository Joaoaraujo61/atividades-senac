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

        $sql = "SELECT * FROM funcionarios WHERE id=$id";
        $resultado = $conexao->query($sql);
        $funcionario = $resultado->fetch_assoc();
        mysqli_close($conexao);
    
    ?>
<div class="container">

    <h2>Editar Registro</h2>

    <form action="editar.php?id=<?php echo $id ?>" method="POST">

        <div class="form-grid">

            <div class="campo campo-full">
                <label>Nome</label>
                <input type="text" name="nome" value="<?php echo $funcionario['nome']?>" required>
            </div>

            <div class="campo">
                <label>Departamento</label>
                <input type="text" name="departamento" value="<?php echo $funcionario['departamento']?>" required>
            </div>

            <div class="campo">
                <label>Salário</label>
                <input type="number" name="salario" value=<?php echo $funcionario['salario']?> required>
            </div>

            <div class="campo">
                <label>Data de Admissão</label>
                <input type="date" name="data" value=<?php echo $funcionario['data_admissao']?> required>
            </div>
        </div>

        <div class="botoes">
            <button type="submit">Confirmar</button>

            <a href="listarFuncionarios.php" class="btn-listar">
                Listar Registros
            </a>
        </div>

    </form>

</div>


</body>
</html>