<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Lista de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="topo">
        <h2>Livros Cadastrados</h2>

        <a href="index.php" class="btn-voltar">
            + Novo Livro
        </a>
    </div>

    <div class="tabela-container">

        <table>

            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>Ano</th>
                    <th>Quantidade</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include "conexao.php";
                    //<a action='excluir_registro.php' class='btn-excluir'>Excluir</a>
                    $sql = "SELECT * FROM livros";
                    $resultado = $conexao->query($sql);

                    while($livro = $resultado->fetch_assoc()){
                        echo "
                        <tr>
                            <td>{$livro['titulo']}</td>
                            <td>{$livro['autor']}</td>
                            <td>{$livro['editora']}</td>
                            <td>{$livro['ano_publicacao']}</td>
                            <td>{$livro['quantidade']}</td>

                            <td class='acoes'>
                                <a href='editar_registro.php?id={$livro['id']}' class='btn-editar'>Editar</a>
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
