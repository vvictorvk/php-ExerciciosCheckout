<?php

// 1. Identificando o Problema:
// A variável estava sendo definida como uma STRING (ex: "true" ou "1"),
// ou estava com um valor que o PHP interpreta como "Falso" em uma comparação solta.
// Para o sistema de decisão funcionar, precisamos de um BOOLEAN real.

// 2. Corrigindo o tipo da variável:
$acessoLiberado = true; // Removidas as aspas para ser um booleano puro

echo "<h2>Verificação de Segurança</h2>";
echo "<hr>";

// 3. Mantendo a estrutura do IF original
if ($acessoLiberado == true) {
    echo "<b>STATUS:</b> Acesso Permitido. <br>";
    echo "Seja bem-vindo ao painel de controle.";
} else {
    echo "<b>STATUS:</b> Acesso Negado. <br>";
    echo "Erro: Você não tem permissão para acessar esta área.";
}

echo "<hr>";

// Dica de aluno para debugar:
echo "O tipo atual da variável é: " . gettype($acessoLiberado); 

?>