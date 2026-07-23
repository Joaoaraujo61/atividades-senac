<?php

$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "bancoLivros";
$porta = "3307";

$conexao = new mysqli(
    $host,
    $usuario,
    $senha,
    $banco,
    $porta
);

if ($conexao->connect_error) {
    die("Erro ao conectar" . $conexao->connect_error);
}

?>
