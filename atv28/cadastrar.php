<?php

    include "conexao.php";

    $dado = [
        "nome"=>$_POST["nome"],
        "idade"=>$_POST["idade"],
        "curso"=>$_POST["curso"],
        "cidade"=>$_POST["cidade"],
    ];

    $sql = "INSERT INTO alunos(nome, idade, curso, cidade)
            VALUES('{$dado['nome']}',
                '{$dado['idade']}',
                '{$dado['curso']}',
                '{$dado['cidade']}')";

    if (!mysqli_query($conexao, $sql)) {
        echo "Erro: " . mysqli_error($conexao);
    }else{
        header("Location: listar.php");
        exit();
    }


?>