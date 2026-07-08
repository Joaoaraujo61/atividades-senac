<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Multiplicação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php

include "conexao.php";

$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];
$num3 = $_POST["numero3"];
$res = $num2*$num1*$num3;

$sql = "INSERT INTO calculo(numero1, numero2, numero3, resultado) 
        VALUES($num1, $num2,$num3, $res)";
?>
    <div class="container">
        <h1>Resultado da Multiplicação</h1>
        <p>Primeiro número: <?php echo $num1; ?></p>
        <p>Segundo número: <?php echo $num2; ?></p>
        <p>Terceiro número: <?php echo $num3; ?></p>
        <div class="resultado">Resultado = <?php echo $res; ?></div>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
