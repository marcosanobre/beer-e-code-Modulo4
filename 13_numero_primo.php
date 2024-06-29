<?php

system("clear");

echo "Entre com um NUMERO INTEIRO POSITIVO:\n\n";

$numero = (int)readline("NUMERO: ");

$divisores = 0;
function numeroDeDivisores( $numero, &$divisores ) {
    // variavel que armazena o número de divisores de um número
    $divisores = 0;
    // recupera o nº atual no loop e, a partir dele, o decrementa até chegar a 1 
    for($j = $numero; $j >= 1; $j--) {
        // se o número do 1º loop for divisível por algum número anterior a ele, ou seja, resto 0 
        // incrementa o número de divisores
        if (($numero % $j) == 0) {
            $divisores++;
        };
    };
    return $divisores;
};

$retorno = numeroDeDivisores( $numero, $divisores );
        
// se o número do loop principal tiver exatamente 2 divisores
// (lembre-se, nº primos tem somente 2 divisores: 1 e ele próprio), exibe o nº primo
if ($retorno == 2) { 
    echo "O Número {$numero} É PRIMO\n\n";
} else {
    echo "O Numero {$numero} NÃO É PRIMO\n\n";
};

