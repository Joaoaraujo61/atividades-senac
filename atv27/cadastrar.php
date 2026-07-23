<?php

    include "conexao.php";

    $livro = [
        "nome"=>$_POST["nome"],
        "departamento"=>$_POST["departamento"],
        "salario"=>$_POST["salario"],
        "data"=>$_POST["data"],
    ];

    $sql = "INSERT INTO funcionarios(nome, departamento, salario, data_admissao)
            VALUES('{$livro['nome']}',
                '{$livro['departamento']}',
                {$livro['salario']},
                '{$livro['data']}')";

    if (!mysqli_query($conexao, $sql)) {
        echo "Erro: " . mysqli_error($conexao);
    }else{
        header("Location: listarFuncionarios.php");
        exit();
    }


?>