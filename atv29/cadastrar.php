<?php

    include "conexao.php";

    $dado = [
        "nome"=>$_POST["nome"],
        "categoria"=>$_POST["categoria"],
        "quantidade"=>$_POST["quantidade"],
        "preco"=>$_POST["preco"],
        "entrega"=>$_POST["entrega"],
    ];

    $sql = "INSERT INTO produtos(nome, categoria, quantidade, preco, entrega)
            VALUES('{$dado['nome']}',
                '{$dado['categoria']}',
                '{$dado['quantidade']}',
                '{$dado['preco']}',
                '{$dado['entrega']}')";

    if (!mysqli_query($conexao, $sql)) {
        echo "Erro: " . mysqli_error($conexao);
    }else{
        header("Location: listar.php");
        exit();
    }


?>