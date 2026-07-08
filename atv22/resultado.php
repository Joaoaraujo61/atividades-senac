<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Subtração</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php

include "conexao.php";

$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];
$num3 = $_POST["numero3"];
$num4 = $_POST["numero4"];
$res = $num1-$num2-$num3-$num4;

$sql = "INSERT INTO subtracao(numero1, numero2, numero3, numero4, resultado) 
        VALUES($num1, $num2,$num3,$num4, $res)";

if (!mysqli_query($conexao, $sql)) {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
    <div class="container">
        <h1>Resultado da Subtração</h1>
        <p>Primeiro número: <?php echo $num1; ?></p>
        <p>Segundo número: <?php echo $num2; ?></p>
        <p>Terceiro número: <?php echo $num3; ?></p>
        <p>Quarto número: <?php echo $num4; ?></p>
        <div class="resultado">Resultado = <?php echo $res; ?></div>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
