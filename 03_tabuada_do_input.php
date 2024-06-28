<?php

if ($argc < 2) {
    die( "\n\nNa linha de execução deste programa, passe um Número Inteiro Positivo !!!\n\n" );
};

$numero = intval( $argv[1] );

echo "\nA tabuada de {$numero} é:";

for ($i = 1; $i < 11; $i++) {
    $mult = $i * $numero;
    echo "\n{$i} x {$numero} = {$mult}";
};
echo "\n\n";



