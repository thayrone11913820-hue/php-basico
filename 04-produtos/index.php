<?php

$produtos = [
    [
        "nome" => "Teclado mecânico",
        "preco" => 150.00,
        "estoque" => 10
    ],
    [
        "nome" => "Mouse sem fio",
        "preco" => 80.00,
        "estoque" => 15
    ],
    [
        "nome" => "Monitor",
        "preco" => 750.00,
        "estoque" => 0
    ],
    [
        "nome" => "Headset",
        "preco" => 120.00,
        "estoque" => 8
    ]
];

function formatarPreco($valor) {
    return "R$ " . number_format($valor, 2, ",", ".");
}

$totalEstoque = 0;
$valorTotal = 0;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>

    <h1>Lista de Produtos</h1>

    <table border="1" cellpadding="10">

        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Status</th>
        </tr>

        <?php foreach ($produtos as $produto): ?>

            <tr>
                <td>
                    <?= htmlspecialchars($produto["nome"]) ?>
                </td>

                <td>
                    <?= formatarPreco($produto["preco"]) ?>
                </td>

                <td>
                    <?= $produto["estoque"] ?>
                </td>

                <td>
                    <?php
                    if ($produto["estoque"] > 0) {
                        echo "Disponível";
                    } else {
                        echo "Indisponível";
                    }
                    ?>
                </td>
            </tr>

            <?php
            $totalEstoque += $produto["estoque"];

            $valorTotal +=
                $produto["preco"] * $produto["estoque"];
            ?>

        <?php endforeach; ?>

    </table>

    <h2>Resumo do Estoque</h2>

    <p>Total de unidades: <?= $totalEstoque ?></p>

    <p>Valor total do estoque:
        <?= formatarPreco($valorTotal) ?>
    </p>

</body>
</html>
