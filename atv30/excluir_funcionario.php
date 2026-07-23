<?php
    include "banco.php";

    $id = (int) $_GET['id'];

    $sql = "DELETE FROM funcionarios WHERE id=$id";

    if (!mysqli_query($conexao, $sql)) {
        echo "Erro: " . mysqli_error($conexao);
    } else {
        header("Location: listar_funcionarios.php");
        exit();
    }

?>
