<?php
// Valores de exemplo do exercício. Altere-os para testar outras situações.
$peso = 70.0;
$altura = 1.75;

$erro = "";
$imc = 0;
$imcFormatado = "";
$classe = "";

if ($peso <= 0 || $altura <= 0) {
    $erro = "Informe peso e altura maiores que zero.";
} else {
    $imc = $peso / ($altura * $altura);
    $imcFormatado = number_format($imc, 1, ",", ".");

    if ($imc < 18.5) {
        $classe = "Abaixo do peso";
    } elseif ($imc < 25) {
        $classe = "Peso normal";
    } elseif ($imc < 30) {
        $classe = "Sobrepeso";
    } elseif ($imc < 35) {
        $classe = "Obesidade grau I";
    } elseif ($imc < 40) {
        $classe = "Obesidade grau II";
    } else {
        $classe = "Obesidade grau III";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>

    <?php if ($erro !== ""): ?>
        <p><?= htmlspecialchars($erro) ?></p>
    <?php else: ?>
        <p>Peso de exemplo: <?= number_format($peso, 1, ",", ".") ?> kg</p>
        <p>Altura de exemplo: <?= number_format($altura, 2, ",", ".") ?> m</p>
        <p>IMC calculado: <strong><?= $imcFormatado ?></strong></p>
        <p>Classificação da tabela para adultos: <strong><?= htmlspecialchars($classe) ?></strong></p>
    <?php endif; ?>

    <p><small>Atividade educativa: a classificação de IMC para adultos é apenas uma triagem e não substitui avaliação profissional.</small></p>
</body>
</html>
