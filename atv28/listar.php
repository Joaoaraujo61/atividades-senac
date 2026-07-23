<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="topo">
        <h2>Alunos Cadastrados</h2>

        <a href="index.php" class="btn-voltar">
            + Novo Aluno
        </a>
    </div>

    <div class="tabela-container">

        <table>

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Curso</th>
                    <th>Cidade</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include "conexao.php";
                    $sql = "SELECT * FROM alunos";
                    $resultado = $conexao->query($sql);

                    while($dado = $resultado->fetch_assoc()){
                        echo "
                        <tr>
                            <td>{$dado['nome']}</td>
                            <td>{$dado['idade']}</td>
                            <td>{$dado['curso']}</td>
                            <td>{$dado['cidade']}</td>

                            <td class='acoes'>
                                <a href='editar_registro.php?id={$dado['id']}' class='btn-editar'>Editar</a>
                                <a href='excluir_registro.php?id={$dado['id']}' class='btn-excluir'>Excluir</a>
                            </td>
                        </tr>
                        ";
                    }
        
                    mysqli_close($conexao);
                ?>
            </tbody>

        </table>

    </div>

</div>

</body>
</html>