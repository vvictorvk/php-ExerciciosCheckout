<?php

// 1. Estrutura de Dados (O nosso carrinho)
$carrinho = [ 
    ["id" => 1, "nome" => "SSD 512GB", "preco" => 280.00, "quantidade" => 1], 
    ["id" => 2, "nome" => "Memória RAM 8GB", "preco" => 150.00, "quantidade" => 2], 
    ["id" => 3, "nome" => "Cabo HDMI 2.0", "preco" => 25.00, "quantidade" => 4], 
    ["id" => 4, "nome" => "Mouse Gamer", "preco" => 120.00, "quantidade" => 1], 
    ["id" => 5, "nome" => "Teclado Mecânico", "preco" => 350.00, "quantidade" => 1], 
    ["id" => 6, "nome" => "Fonte 600W", "preco" => 420.00, "quantidade" => 1], 
    ["id" => 7, "nome" => "HD Externo 1TB", "preco" => 390.00, "quantidade" => 1], 
    ["id" => 8, "nome" => "Headset USB", "preco" => 180.00, "quantidade" => 2], 
]; 

echo "<h2>Resumo do Pedido</h2>";
echo "<hr>";

// Variável acumuladora para o total
$totalGeral = 0;

// 2. O Desafio (Lógica de Percorrer a Matriz)
foreach ($carrinho as $item) {
    // Cálculo do subtotal de cada item (Preço x Quantidade)
    $subtotalItem = $item['preco'] * $item['quantidade'];
    
    // Acumulando o valor no total geral
    $totalGeral += $subtotalItem;

    // Exibindo os dados do item de forma organizada
    echo "<b>Produto:</b> " . $item['nome'] . "<br>";
    echo "Quantidade: " . $item['quantidade'] . "<br>";
    
    // Usando o formatador que você aprendeu: R$ 0,00
    echo "Subtotal: R$ " . number_format($subtotalItem, 2, ',', '.') . "<br>";
    echo "-----------------------------------<br>";
}

echo "<br>";

// 3. Regra de Negócio: Desconto de 10% se a compra for > R$ 200,00
$valorDesconto = 0;

if ($totalGeral > 200) {
    // Calcula 10% de desconto
    $valorDesconto = $totalGeral * 0.10;
    $totalFinal = $totalGeral - $valorDesconto;
} else {
    // Se não tiver desconto, o valor final é o total bruto
    $totalFinal = $totalGeral;
}

// 4. Exibição dos Totais Finais
echo "<h3>Resumo Financeiro</h3>";
echo "Subtotal da Compra: R$ " . number_format($totalGeral, 2, ',', '.') . "<br>";

if ($valorDesconto > 0) {
    echo "Desconto Aplicado (10%): - R$ " . number_format($valorDesconto, 2, ',', '.') . "<br>";
}

echo "<b>Total Final a Pagar: R$ " . number_format($totalFinal, 2, ',', '.') . "</b><br>";

?>