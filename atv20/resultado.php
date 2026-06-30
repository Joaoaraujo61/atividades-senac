<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Soma</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php

include "conexao.php";

$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];
$res = $num2+$num1;

$sql = "INSERT INTO calculo(numero1, numero2, resultado) 
        VALUES($num1, $num2, $res)";
?>
    <div class="container">
        <h1>Resultado da Soma</h1>
        <p>Primeiro número: <?php echo $num1; ?></p>
        <p>Segundo número: <?php echo $num2; ?></p>
        <div class="resultado">Soma = <?php echo $res; ?></div>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
