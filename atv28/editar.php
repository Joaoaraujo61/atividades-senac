<?php

    include "conexao.php";
    
    $id = (int) $_GET['id'];

    $dado = [
        "nome"=>$_POST["nome"],
        "idade"=>$_POST["idade"],
        "curso"=>$_POST["curso"],
        "cidade"=>$_POST["cidade"],
    ];

    $sql = "UPDATE alunos 
        SET nome = '{$dado['nome']}', 
            idade = '{$dado['idade']}', 
            curso = '{$dado['curso']}', 
            cidade = '{$dado['cidade']}'
        WHERE id = $id"; 


    if (!mysqli_query($conexao, $sql)) {
        echo "Erro: " . mysqli_error($conexao);
    }else{
        header("Location: listar.php");
        exit();
    }


?>