<?php
    include "conexao.php";
    
    $id = (int) $_GET['id'];

    $dado = [
        "nome"=>$_POST["nome"],
        "idade"=>$_POST["idade"],
        "categoria"=>$_POST["categoria"],
        "quantidade"=>$_POST["quantidade"],
        "preco"=>$_POST["preco"],
        "entrega"=>$_POST["entrega"],
        ];

    $sql = "DELETE FROM produtos WHERE id=$id";


    if (!mysqli_query($conexao, $sql)) {
        echo "Erro: " . mysqli_error($conexao);
    }else{
        header("Location: listar.php");
        exit();
    }


?>