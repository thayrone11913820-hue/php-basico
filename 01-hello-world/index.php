<?php
$nome = "Thayrone";
$curso = "Técnico em Informática";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Hello World em PHP</title>
</head>
<body>

    <h1><?php echo "Hello, World!"; ?></h1>

    <p>Meu nome é <?= htmlspecialchars($nome) ?>.</p>

    <p>Estou aprendendo PHP no curso de
        <?= htmlspecialchars($curso) ?>.</p>

</body>
</html>
