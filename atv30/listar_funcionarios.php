<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="topo">
        <h2>Funcionários Cadastrados</h2>
    </div>

    <div class="tabela-container">

        <table>

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Departamento</th>
                    <th>Salário</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include "banco.php";
                    $sql = "SELECT * FROM funcionarios";
                    $resultado = $conexao->query($sql);

                    while ($dado = $resultado->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>{$dado['nome']}</td>
                            <td>{$dado['cargo']}</td>
                            <td>{$dado['departamento']}</td>
                            <td>{$dado['salario']}</td>

                            <td class='acoes'>
                                <a href='excluir_funcionario.php?id={$dado['id']}' class='btn-excluir'>Excluir</a>
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
