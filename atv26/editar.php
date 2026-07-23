<?php

    include "conexao.php";
    
    $id = (int) $_GET['id'];

    $livro = [
        "titulo"=>$_POST["titulo"],
        "autor"=>$_POST["autor"],
        "editora"=>$_POST["editora"],
        "ano"=>$_POST["ano_publicacao"],
        "quantidade"=>$_POST["quantidade"],
    ];

    $sql = "UPDATE livros 
        SET titulo = '{$livro['titulo']}', 
            autor = '{$livro['autor']}', 
            editora = '{$livro['editora']}', 
            ano_publicacao = {$livro['ano']}, 
            quantidade = {$livro['quantidade']}
        WHERE id = $id"; 


    if (!mysqli_query($conexao, $sql)) {
        echo "Erro: " . mysqli_error($conexao);
    }else{
        header("Location: listarLivros.php");
        exit();
    }


?>SELECT titulo
FROM livros
WHERE id = 1;