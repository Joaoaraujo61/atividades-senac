<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="topo">
        <h2>Funcionários Cadastrados</h2>

        <a href="index.php" class="btn-voltar">
            + Novo Funcionário
        </a>
    </div>

    <div class="tabela-container">

        <table>

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Departamento</th>
                    <th>Salário</th>
                    <th>Data de Admissão</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include "conexao.php";
                    //<a action='excluir_registro.php' class='btn-excluir'>Excluir</a>
                    $sql = "SELECT * FROM funcionarios";
                    $resultado = $conexao->query($sql);

                    while($funcionario = $resultado->fetch_assoc()){
                        echo "
                        <tr>
                            <td>{$funcionario['nome']}</td>
                            <td>{$funcionario['departamento']}</td>
                            <td>{$funcionario['salario']}</td>
                            <td>{$funcionario['data_admissao']}</td>

                            <td class='acoes'>
                                <a href='editar_registro.php?id={$funcionario['id']}' class='btn-editar'>Editar</a>
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