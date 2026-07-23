<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="topo">
        <h2>Livros Cadastrados</h2>
    </div>

    <div class="tabela-container">

        <table>

            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>Ano de Publicação</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include "banco.php";
                    $sql = "SELECT * FROM livros";
                    $resultado = $conexao->query($sql);

                    while ($dado = $resultado->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>{$dado['titulo']}</td>
                            <td>{$dado['autor']}</td>
                            <td>{$dado['editora']}</td>
                            <td>{$dado['ano_publicacao']}</td>

                            <td class='acoes'>
                                <a href='excluir_livro.php?id={$dado['id']}' class='btn-excluir'>Excluir</a>
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
