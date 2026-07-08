<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        include "conexao.php";

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $cidade = $_POST["cidade"];

        $msg = "";

        $sql = "INSERT INTO formulario_cliente (nome, idade, email, telefone, cidade) 
                VALUES('$nome', $idade, '$email', '$telefone', '$cidade')";

        if (mysqli_query($conexao, $sql)) {
            $msg = "Dados Gravados com sucesso!";
        }else{  
            echo "Erro: " . mysqli_error($conexao);
        }

        mysqli_close($conexao);
    ?>
    <div class="container">
        <h1><?php echo $msg ?></h1>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>
