<?php

include "conexao.php";

$num1 = 2;
$num2 = 5;
$res = $num2+$num1;

$sql = "INSERT INTO calculo(numero1, numero2, resultado) 
        VALUES($num1, $num2, $res)";

if($conexao->query($sql)){
    echo "<br>Dados salvos!com sucesso";
}else{
    echo "<br>Erro ao salvar dados!";
}


?>