<?php
    include "conexao.php";
    
    $id = (int) $_GET['id'];

    $dado = [
        "nome"=>$_POST["nome"],
        "idade"=>$_POST["idade"],
        "curso"=>$_POST["curso"],
        "cidade"=>$_POST["cidade"],
    ];

    $sql = "DELETE FROM alunos WHERE id=$id";


    if (!mysqli_query($conexao, $sql)) {
        echo "Erro: " . mysqli_error($conexao);
    }else{
        header("Location: listar.php");
        exit();
    }


?>