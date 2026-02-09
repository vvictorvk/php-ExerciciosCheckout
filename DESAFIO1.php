<?php

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

$totalGeral = 0;


foreach ($carrinho as $item) {
    // Cálculo do subtotal de cada item (Preço x Quantidade)
    $subtotalItem = $item['preco'] * $item['quantidade'];
    
    $totalGeral += $subtotalItem;

    // Exibindo os dados do item de forma organizada
    echo "<b>Produto:</b> " . $item['nome'] . "<br>";
    echo "Quantidade: " . $item['quantidade'] . "<br>";

    
    echo "Subtotal: R$ " . number_format($subtotalItem, 2, ',', '.') . "<br>";
    echo "-----------------------------------<br>";
}

echo "<br>";


$valorDesconto = 0;

if ($totalGeral > 200) {
    // Calcula 10% de desconto
    $valorDesconto = $totalGeral * 0.10;
    $totalFinal = $totalGeral - $valorDesconto;
} else {
    // Se não tiver desconto, o valor final é o total bruto
    $totalFinal = $totalGeral;
}


echo "<h3>Resumo Financeiro</h3>";
echo "Subtotal da Compra: R$ " . number_format($totalGeral, 2, ',', '.') . "<br>";

if ($valorDesconto > 0) {
    echo "Desconto Aplicado (10%): - R$ " . number_format($valorDesconto, 2, ',', '.') . "<br>";
}

echo "<b>Total Final a Pagar: R$ " . number_format($totalFinal, 2, ',', '.') . "</b><br>";

?>
