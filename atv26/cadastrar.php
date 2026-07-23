<?php

    include "conexao.php";

    $livro = [
        "titulo"=>$_POST["titulo"],
        "autor"=>$_POST["autor"],
        "editora"=>$_POST["editora"],
        "ano"=>$_POST["ano_publicacao"],
        "quantidade"=>$_POST["quantidade"],
    ];

    $sql = "INSERT INTO livros(titulo, autor, editora, ano_publicacao, quantidade)
            VALUES('{$livro['titulo']}',
                '{$livro['autor']}',
                '{$livro['editora']}',
                {$livro['ano']},
                {$livro['quantidade']})";

    if (!mysqli_query($conexao, $sql)) {
        echo "Erro: " . mysqli_error($conexao);
    }else{
        header("Location: listarLivros.php");
        exit();
    }


?>