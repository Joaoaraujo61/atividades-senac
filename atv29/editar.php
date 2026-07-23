<?php

    include "conexao.php";
    
    $id = (int) $_GET['id'];

    $dado = [
        "nome"=>$_POST["nome"],
        "categoria"=>$_POST["categoria"],
        "quantidade"=>$_POST["quantidade"],
        "preco"=>$_POST["preco"],
        "entrega"=>$_POST["entrega"],
    ];

    $sql = "UPDATE produtos 
        SET nome = '{$dado['nome']}', 
            categoria = '{$dado['categoria']}', 
            quantidade = '{$dado['quantidade']}', 
            preco = '{$dado['preco']}',
            entrega = '{$dado['entrega']}'
        WHERE id = $id"; 


    if (!mysqli_query($conexao, $sql)) {
        echo "Erro: " . mysqli_error($conexao);
    }else{
        header("Location: listar.php");
        exit();
    }


?>