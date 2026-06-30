<?php

include "conexao.php";

$num1 = 2;
$num2 = 52;
$num3= 3;
$res = $num2*$num1*$num3;

$sql = "INSERT INTO calculo(numero1, numero2, numero3, resultado) 
        VALUES($num1, $num2, $num3, $res)";

if($conexao->query($sql)){
    echo "<br>Dados salvos!com sucesso";
}else{
    echo "<br>Erro ao salvar dados!";
}


?>