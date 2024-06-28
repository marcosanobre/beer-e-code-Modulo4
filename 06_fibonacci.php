<?php

if ($argc < 2) {
    die( "\n\nNa linha de execução deste programa, passe um Número Inteiro Positivo e maior que 2 !!!\n\n" );
};

$numero = intval( $argv[1] );

echo "\nA sequencia de Fibonacci até {$numero} é:\n\n";

echo "F0 = 0\nF1 = 1\n";

$sequencia = [0, 1];

for ($i=2; $i <= $numero ; $i++) {
    $prox = $sequencia[$i-1] + $sequencia[$i-2];
    array_push( $sequencia, $prox );
    echo "F{$i} = {$sequencia[$i]}\n";
};

