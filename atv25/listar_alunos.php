<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Alunos</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Curso</th>
                <th>Cidade</th>
                <th>Entrega</th>
            </tr>
    <?php

        include "conexao.php";

        for($i=1; $i<=5;$i++){
            $nome = $conexao->execute_query("SELECT nome FROM alunos WHERE id=?", [$i])->fetch_assoc();
            $idade = $conexao->execute_query("SELECT idade FROM alunos WHERE id=?", [$i])->fetch_assoc();
            $curso = $conexao->execute_query("SELECT curso FROM alunos WHERE id=?", [$i])->fetch_assoc();
            $cidade = $conexao->execute_query("SELECT cidade FROM alunos WHERE id=?", [$i])->fetch_assoc();
            $entrega = $conexao->execute_query("SELECT entrega FROM alunos WHERE id=?", [$i])->fetch_assoc();

            echo "<tr>
                        <td>$nome[nome]</td>
                        <td>$idade[idade]</td>
                        <td>$curso[curso]</td>
                        <td>$cidade[cidade]</td>
                        <td>$entrega[entrega]</td>
                </tr>";
        }
        

        mysqli_close($conexao);
    ?>
        </table>
    </div>
</body>
</html>
