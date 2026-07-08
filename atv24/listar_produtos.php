<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Produtos</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
            </tr>
    <?php

        include "conexao.php";

        for($i=1; $i<=3;$i++){
            $nome = $conexao->execute_query("SELECT nome FROM produtos WHERE id=?", [$i])->fetch_assoc();
            $quantidade = $conexao->execute_query("SELECT quantidade FROM produtos WHERE id=?", [$i])->fetch_assoc();
            $preco = $conexao->execute_query("SELECT preco FROM produtos WHERE id=?", [$i])->fetch_assoc();

            echo "<tr>
                        <td>$nome[nome]</td>
                        <td>$quantidade[quantidade]</td>
                        <td>R$ $preco[preco]</td>
                </tr>";
        }
        

        mysqli_close($conexao);
    ?>
        </table>
    </div>
</body>
</html>
