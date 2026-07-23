<?php

    include "conexao.php";
    
    $id = (int) $_GET['id'];

    $funcionario = [
        "nome"=>$_POST["nome"],
        "departamento"=>$_POST["departamento"],
        "salario"=>$_POST["salario"],
        "data"=>$_POST["data"],
    ];

    $sql = "UPDATE funcionarios 
        SET nome = '{$funcionario['nome']}', 
            departamento = '{$funcionario['departamento']}', 
            salario = {$funcionario['salario']}, 
            data_admissao = '{$funcionario['data']}'
        WHERE id = $id"; 


    if (!mysqli_query($conexao, $sql)) {
        echo "Erro: " . mysqli_error($conexao);
    }else{
        header("Location: listarFuncionarios.php");
        exit();
    }


?>