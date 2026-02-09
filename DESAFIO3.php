<?php

// 1. Identificando o Problema


// 2. Corrigindo o tipo da variável
$acessoLiberado = true; // Removidas as aspas para ser um booleano 

echo "<h2>Verificação de Segurança</h2>";
echo "<hr>";

if ($acessoLiberado == true) {
    echo "<b>STATUS:</b> Acesso Permitido. <br>";
    echo "Seja bem-vindo ao painel de controle.";
} else {
    echo "<b>STATUS:</b> Acesso Negado. <br>";
    echo "Erro: Você não tem permissão para acessar esta área.";
}

echo "<hr>";

//  para debugar:
echo "O tipo atual da variável é: " . gettype($acessoLiberado); 

?>
