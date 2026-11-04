<?php
date_default_timezone_set("America/Sao_Paulo");

$data = date("d/m/Y");
$hora = date("H:i:s");
$dia = date("l");

$horaAtual = (int) date("H");

if ($horaAtual < 12) {
    $mensagem = "Bom dia!";
} elseif ($horaAtual < 18) {
    $mensagem = "Boa tarde!";
} else {
    $mensagem = "Boa noite!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Data e Hora</title>
</head>
<body>

    <h1>Data e Hora Atual</h1>

    <p>Data: <?= $data ?></p>
    <p>Hora: <?= $hora ?></p>
    <p>Dia da semana: <?= $dia ?></p>

    <h2><?= $mensagem ?></h2>

</body>
</html>
