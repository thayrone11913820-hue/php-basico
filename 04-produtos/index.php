<?php
$produtos = [
    ["nome" => "Teclado mecânico", "preco" => 249.90, "estoque" => 12],
    ["nome" => "Mouse sem fio", "preco" => 79.50, "estoque" => 30],
    ["nome" => "Monitor", "preco" => 899.00, "estoque" => 0],
    ["nome" => "Headset", "preco" => 159.90, "estoque" => 8],
];

function formatarPreco(float $valor): string
{
    return "R$ " . number_format($valor, 2, ",", ".");
}

$total = 0;
foreach ($produtos as $item) {
    $total += $item["preco"] * $item["estoque"];
}

$quantidade = count($produtos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; max-width: 800px; }
        th, td { border: 1px solid #999; padding: 10px; text-align: left; }
        th { background: #e8eef7; }
        .esgotado { color: #b00020; font-weight: bold; }
        .disponivel { color: #176b35; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Lista de produtos</h1>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Situação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item["nome"]) ?></td>
                    <td><?= formatarPreco($item["preco"]) ?></td>
                    <td><?= (int) $item["estoque"] ?></td>
                    <td class="<?= $item["estoque"] > 0 ? "disponivel" : "esgotado" ?>">
                        <?= $item["estoque"] > 0 ? "Disponível" : "Esgotado" ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><?= $quantidade ?> produtos cadastrados.</p>
    <p>Valor total em estoque: <strong><?= formatarPreco($total) ?></strong></p>
</body>
</html>
