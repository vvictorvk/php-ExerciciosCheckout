<?php

$valor1 = 50;
$valor2 = "25"; // O PHP até soma isso, mas não é seguro!

echo "<h2>Validação de Soma</h2>";
echo "<hr>";

// Usando o IF para validar se AMBOS são numéricos
// A função is_numeric() é a melhor aqui porque aceita inteiros e decimais
if (is_numeric($valor1) && is_numeric($valor2)) {
    
    // A soma só acontece se passar no teste acima
    $soma = $valor1 + $valor2;
    
    echo "O primeiro valor é: $valor1 <br>";
    echo "O segundo valor é: $valor2 <br>";
    echo "<b>Resultado da Soma:</b> $soma <br>";

} else {
    
    // Caso algum valor não seja número, exibe o erro
    echo "<b style='color: red;'>Erro:</b> Você tentou somar valores inválidos. <br>";
    echo "Certifique-se de que $valor1 e $valor2 sejam números.";

}

echo "<hr>";
?>